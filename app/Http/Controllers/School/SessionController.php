<?php

namespace App\Http\Controllers\School;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Session;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentPromote;
use App\Models\SessionAssignClass;
use App\Models\StudentClassAssign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function viewAllSession()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $allSessions = Session::where('school_id',$school->id)->OrderBy('id','DESC')->where('is_deleted','0')->paginate(10);

        return view("school.session.index")->with(compact('allSessions'));
    }

    public function create()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $previous_session = Session::where('school_id',$school->id)->where('is_deleted','0')->where('is_active','1')->first();
        if(!empty($previous_session) AND $previous_session->end_date >= date("Y-m-d"))
        {
            return back()->with('error','Previous Session is not finished yet.');
        }
        return view("school.session.create")->with(compact('school'));
    }

    public function store(Request $request)
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $previous_session = Session::where('school_id',$school->id)->where('is_deleted','0')->where('is_active','1')->first();
        if(!empty($previous_session) AND $previous_session->end_date >= date("Y-m-d"))
        {
            return back()->with('error','Previous Session is not finished yet.');
        }
        if($request->end_date < $request->start_date)
        {
            return back()->with('error','Kindly correct date format');
        }
        $session = new Session();
        $session->title = $request->title;
        $session->start_date = $request->start_date;
        $session->end_date = $request->end_date;
        $session->school_id = $school->id;
        $session->created_by = Auth::user()->id;
        if($previous_session)
        {
            Session::where('school_id',$school->id)->where('is_deleted','0')->update([
                'is_active' => '0'
            ]);
        }
        $session->save();


        return to_route('school.view-all-session')->with('success', "Session created successfully");
    }

    public function edit($id)
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $session = Session::findOrFail($id);

        return view("school.session.edit")->with(compact('school','session'));
    }

    public function update(Request $request)
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $previous_session = Session::where('school_id',$school->id)->where('is_deleted','0')->where('id','!=',$request->id)->where('is_active','1')->first();
        
        if(!empty($previous_session) AND $previous_session->end_date >= date("Y-m-d"))
        {
            return back()->with('error','Previous Session is not finished yet.');
        }
        if($request->end_date < $request->start_date)
        {
            return back()->with('error','Kindly correct date format');
        }
        $session = Session::find($request->id);
        $session->title = $request->title;
        $session->start_date = $request->start_date;
        $session->end_date = $request->end_date;
        if($previous_session)
        {
            Session::where('school_id',$school->id)->where('is_deleted','0')->update([
                'is_active' => '0'
            ]);
        }
        $session->is_active = "1";
        $session->save();

        return to_route('school.view-all-session')->with('success', "Session created successfully");
    }

    public function delete(Request $request)
    {
        $session = Session::find($request->id);
        if($session->is_active == "1")
        {
            return back()->with('error','Session can"t be deleted.');
        }
        $session->is_deleted = "1";
        $session->save();

        return back()->with('success','Session Deleted Successfully');
    }

    public function block(Request $request)
    {
        $session = Session::find($request->id);
        $session->is_active = $session->is_active == "0" ? "1" : "0";
        $session->save();

        return back()->with('success','Session Status Changed Successfully');
    }

    public function migrations()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $classes = Classes::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('name','ASC')->get();
        $sections = Section::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('name','ASC')->get();
        $sessions = Session::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->get();

        $students = $promote_classes = [];
        if(!empty(request()->current_session) AND !empty(request()->promote_session) AND !empty(request()->section_id) AND !empty(request()->class_id))
        {
            $count = StudentPromote::where([
                'school_id'=>$school->id,
                'previous_session_id'=>request()->current_session,'previous_class_id'=>request()->class_id,
                'previous_section_id'=>request()->section_id
                ])->count();
            if($count > 0)
            {
                $students = [];
            }
            else
            {
                $students = StudentClassAssign::join('students', 'student_class_assigns.student_id', '=', 'students.id')
                ->where('student_class_assigns.class_id', request()->class_id)
                ->where('student_class_assigns.section_id', request()->section_id)
                ->select('students.id', 'students.first_name', 'students.last_name')
                ->get();
            }

        }

        return view("school.session.migrations")->with(compact('school','classes','sections','sessions','students'));
    }

    public function migrationsStore(Request $request)
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);

        $count = StudentPromote::where([
            'school_id'=>$school->id,
            'previous_session_id'=>$request->current_session,'previous_class_id'=>$request->class_id,
            'previous_section_id'=>$request->section_id
            ])->count();

        if($count > 0)
        {
            return back()->with('error','This Session For this Class and Section already promoted');
        }
        foreach($request->all_students as $studentID)
        {
            $student_promote = new StudentPromote;
            $student_promote->school_id = $school->id;
            $student_promote->student_id = $studentID;
            $student_promote->previous_session_id = $request->current_session;
            $student_promote->previous_class_id = $request->class_id;
            $student_promote->previous_section_id = $request->section_id;
            $student_promote->current_session_id = $request->promote_session;
            $student_promote->current_class_id = $request->promote_class_id;
            $student_promote->current_section_id = $request->promote_section_id;
            $result = $student_promote->save();
        }
        if($result)
        {
            return back()->with('success','Students Promoted Successfully');
        }
    }
}
