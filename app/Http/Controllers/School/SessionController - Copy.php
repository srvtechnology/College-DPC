<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Classes;
use App\Models\Session;
use App\Models\SessionAssignClass;

class SessionController extends Controller
{
    public function viewAllSession()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $allSessions = Session::where('school_id',$school->id)->get();
        // return $session;

        return view("school.session.index")->with(compact('allSessions'));
    }

    public function create()
    {
        // return "Yes";
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $classes = Classes::where('school_id', $school->id)->where('is_deleted','0')->OrderBy("name", 'asc')->get();

        return view("school.session.create")->with(compact('classes','school'));
    }

    public function store(Request $request)
    {
        // return $request;
        $school = getSchoolInfoByUsername(Auth::user()->username);

        $session = new Session();
        $session->title = $request->title;
        $session->start_date = $request->start_date;
        $session->end_date = $request->end_date;
        $session->school_id = $school->id;
        $session->save();

        $sessionId = $session->id;

        $data = $request->all();
        $errorMsg = [];

            // return $data;
        foreach ($data as $key => $value) {
            if (strpos($key, 'class_id') === 0) {
                $classId = $value[0];
                $sectionKey = 'section_id' . substr($key, strlen('class_id'));
                $sectionIds = $data[$sectionKey];

                if (!is_array($sectionIds)) {
                    $sectionIds = [$sectionIds];
                }

                foreach ($sectionIds as $sectionId) {
                    $session_assign_class = SessionAssignClass::where('class_id', $classId)
                        ->where('session_id', $sessionId)
                        ->where('section_id', $sectionId)
                        ->where('school_id', $school->id)
                        ->first();

                    if (!$session_assign_class) {
                        $assignClass = new SessionAssignClass();
                        $assignClass->class_id = $classId;
                        $assignClass->session_id = $sessionId;
                        $assignClass->section_id = $sectionId;
                        $assignClass->school_id = $school->id;
                        $assignClass->save();
                    } else {
                        $errorMsg[] = "Assignment for Class $classId, Section $sectionId already exists";
                    }
                }
            }
        }

        return view("school.session.index");
    }


}
