<?php

namespace App\Http\Controllers\API\Teacher;

use App\Models\Exam;
use App\Models\User;
use App\Models\Staff;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\HomeWork;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use App\Models\ExamTimeSheet;
use App\Models\StudentResult;
use App\Models\StudyMaterial;
use App\Models\LeaveApplication;
use App\Models\StaffAssignClass;
use App\Models\TimeTableSetting;
use App\Models\StudentClassAssign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\TimeTableAssignPeriod;
use App\Models\StudentLeaveApplication;
use App\Models\ClassAssignSubject;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{

    public function detail()
    {
        $classList = null;
        $subjectList = null;
        $user = User::where('id',Auth::user()->id)->first();
        $staff = Staff::with('designation','qualifications','experiences')->where('username',Auth::user()->username)->first();
        if(!$staff)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
        if(!empty($staff->image) AND file_exists(public_path('uploads/schools/logo').'/'.$staff->image))
        {
            $staff['image'] = asset('uploads/schools/logo/'.$staff->image);
        }
        $classNames = StaffAssignClass::with('sections')
            ->where('school_id',$user->school_id)
            ->where('staff_id',$staff->id)
            ->groupBy('class_id')
            ->get(['class_id']);

        $response = null;
        foreach ($classNames as $key => $className) {
            $response[$key]['class_id'] = $className->class->id;
            $response[$key]['class_name'] = $className->class->name;
            $sections = StaffAssignClass::where('class_id', $className->class_id)
                ->where('school_id',$user->school_id)
                ->where('staff_id',$staff->id)
                ->get();

                foreach($sections as $index => $section) {
                    $response[$key]['sections'][$index]['section_id'] = $section->section->id;
                    $response[$key]['sections'][$index]['section_name'] = $section->section->name;
                    $response[$key]['sections'][$index]['class_teacher'] = 0;
                    if(!empty($staff->assign_class_to_class_teacher) AND !empty($staff->assign_section_to_class_teacher) AND ($className->class->id == $staff->assign_class_to_class_teacher) AND ($section->section->id == $staff->assign_section_to_class_teacher))
                    {
                        $response[$key]['sections'][$index]['class_teacher'] = 1;
                    }
                }
        }
        $subjects = null;
        if(count($staff->subjects) > 0)
        {
            foreach($staff->subjects as $sub_index => $subjects)
            {
                $staff["subjects"][$sub_index] = [
                    'id' => $subjects->subject->id,
                    'name' => $subjects->subject->name,
                ];
            }
        }

        $data = [
            'user' => $staff,
            'classes' => $response
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'User Detail',
            'data' => $data
        ],200);
    }

    public function applyLeave(Request $request)
    {
        if(empty($request->message) AND empty($request->file))
        {
            $validator = Validator::make($request->all(), [
                'message' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status' => 'error',
                    'message' => $validator->errors()
                ],422);
            }
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $leave_application = new LeaveApplication;
        $leave_application->school_id = $school->id;
        $leave_application->staff_id = $staff->id;
        $leave_application->user_id = $school->user_id;
        $leave_application->subject = "Leave Application";
        $leave_application->message = !empty($request->message) ? $request->message : "";
        $leave_application->date = date("Y-m-d");
        if($request->hasFile("file"))
        {
            $image = $request->file('file');
            $imageName = Auth::user()->id.time() . '.' . $image->extension();
            $image->move(public_path('uploads/schools/leave'), $imageName);
            $leave_application->file = $imageName;
        }
        $result = $leave_application->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Leave Application has been submitted successfully',
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function viewLeaveApplication()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $leave_applications = LeaveApplication::where('staff_id',$staff->id)->OrderBy('id','DESC')->get();
        if(count($leave_applications) > 0)
        {
            foreach($leave_applications as $key => $leave_application)
            {
                if(!empty($leave_application->file) AND file_exists(public_path('uploads/schools/leave').'/'.$leave_application->file))
                {
                    $leave_applications[$key]['file'] = asset("uploads/schools/leave/".$leave_application->file);
                }
                $leave_applications[$key]['user'] = $leave_application->user;
                unset($leave_applications[$key]['user_id']);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'All Leave Applications',
                'data' => $leave_applications
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'NO Record Found',
            ],404);
        }
    }

    public function viewStudentLeaveApplication()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $leave_applications = StudentLeaveApplication::where('staff_id',$staff->id)->OrderBy('id','DESC')->get();
        if(count($leave_applications) > 0)
        {
            foreach($leave_applications as $key => $leave_application)
            {
                if(!empty($leave_application->file) AND file_exists(public_path('uploads/schools/leave').'/'.$leave_application->file))
                {
                    $leave_applications[$key]['file'] = asset("uploads/schools/leave/".$leave_application->file);
                }
                $leave_applications[$key]['user'] = $leave_application->user;
                unset($leave_applications[$key]['user_id']);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'All Leave Applications',
                'data' => $leave_applications
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'NO Record Found',
            ],404);
        }
    }

    public function applyStudenLeaveApplication(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'leave_application_id' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $leave_application = StudentLeaveApplication::find($request->leave_application_id);
        if(!$leave_application)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'NO Record Found',
            ],404);
        }

        if($request->status == "accepted")
        {
            $leave_application->status = "accepted";
            $leave_application->reason = null;
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'reason' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status' => 'error',
                    'message' => $validator->errors()
                ],422);
            }

            $leave_application->status = "rejected";
            $leave_application->reason = $request->reason;
        }

        $leave_application->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Leave Applications Status has been updated',
        ],200);
    }

    public function createHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        if(empty($request->description) AND count($request->files) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Input any one description or file'
            ],400);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homework = new HomeWork;
        $homework->school_id = $school->id;
        $homework->created_by_staff = $staff->id;
        $homework->class_id = $request->class_id;
        $homework->section_id = $request->section_id;
        $homework->subject_id = $request->subject_id;
        $homework->type = "homework";
        $homework->title = $request->title;
        $homework->description = $request->description;
        if ($request->hasFile('files')) {
            $fileNames = [];
            foreach ($request->file('files') as $file) {
                $image = $file;
                $imageName = Auth::user()->id . time() . rand(0, 99) . '.' . $image->extension();
                $image->move(public_path('uploads/schools/homework'), $imageName);
                $fileNames[] = $imageName;
            }
            $homework->files = implode(',', $fileNames);
        }
        $homework->due_date = $request->due_date;
        $homework->date = now();
        $result = $homework->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'HomeWork has been uploaded successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function viewHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id'    =>  'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homeworks = HomeWork::with('class','section','subject')->where('created_by_staff',$staff->id)
        ->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('subject_id',$request->subject_id)
        ->where('type','homework')->where('is_deleted','0')->OrderBy('id','DESC')->get();
        foreach ($homeworks as $key => $homework) {
            $explode = explode(",", $homework->files);
            $modifiedFiles = [];
            if(!empty($homework->files))
            {
                foreach ($explode as $file_index => $fileName) {
                    $filePath = public_path('uploads/schools/homework') . '/' . $fileName;
                    if (file_exists($filePath)) {
                        $modifiedFiles[$file_index] = asset("uploads/schools/homework/" . $fileName);
                    }
                }
                $homework->files = $modifiedFiles;
            }
        }

        if(count($homeworks) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Home Works.',
                'data' => $homeworks
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function deleteHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $homeworkID = HomeWork::where('id',$request->id)->where('type','homework')->first();
        if(!$homeworkID)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Home Work Found.'
            ],404);
        }

        $homeworkID->is_deleted = '1';
        $result = $homeworkID
        ->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'HomeWork has been deleted successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function editHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
            'home_work_id' => 'required',
            'subject_id'    =>  'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        if(empty($request->description) AND count($request->files) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Input any one description or file'
            ],400);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $homework = HomeWork::where('id',$request->home_work_id)->where('type','homework')->first();
        if(!$homework)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Home Work Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homework->school_id = $school->id;
        $homework->created_by_staff = $staff->id;
        $homework->class_id = $request->class_id;
        $homework->section_id = $request->section_id;
        $homework->subject_id = $request->subject_id;
        $homework->type = "homework";
        $homework->title = $request->title;
        $homework->description = $request->description;
        if ($request->hasFile('files')) {
            $fileNames = [];
            foreach ($request->file('files') as $file) {
                $image = $file;
                $imageName = Auth::user()->id . time() . rand(0, 99) . '.' . $image->extension();
                $image->move(public_path('uploads/schools/homework'), $imageName);
                $fileNames[] = $imageName;
            }
            $homework->files = implode(',', $fileNames);
        }
        else
        {
            $homework->files = null;
        }
        $homework->due_date = $request->due_date;
        $result = $homework->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'HomeWork has been updated successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],401);
        }
    }

    public function changeStatusHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'home_work_id' => 'required',
            'status'    =>  'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],401);
        }

        $homework = HomeWork::find($request->home_work_id);
        if(!$homework)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Home Work Found.'
            ],404);
        }

        $homework->status = $request->status;
        $result = $homework->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Status has been updated successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],401);
        }
    }


    public function createSyllabus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'title' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        if(empty($request->description) AND count($request->files) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Input any one description or file'
            ],400);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homework = new HomeWork;
        $homework->school_id = $school->id;
        $homework->created_by_staff = $staff->id;
        $homework->class_id = $request->class_id;
        $homework->section_id = $request->section_id;
        $homework->type = "syllabus";
        $homework->title = $request->title;
        $homework->description = $request->description;
        if ($request->hasFile('files')) {
            $fileNames = [];
            foreach ($request->file('files') as $file) {
                $image = $file;
                $imageName = Auth::user()->id . time() . rand(0, 99) . '.' . $image->extension();
                $image->move(public_path('uploads/schools/syllabus'), $imageName);
                $fileNames[] = $imageName;
            }
            $homework->files = implode(',', $fileNames);
        }
        $homework->date = now();
        $result = $homework->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Syllabus has been uploaded successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function viewSyllabus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homeworks = HomeWork::where('created_by_staff',$staff->id)->where('type','syllabus')
        ->where('class_id',$request->class_id)->where('section_id',$request->section_id)
        ->where('is_deleted','0')->OrderBy('id','DESC')->get();
        foreach ($homeworks as $key => $homework) {
            $explode = explode(",", $homework->files);
            $modifiedFiles = [];
            if(!empty($homework->files))
            {
                foreach ($explode as $file_index => $fileName) {
                    $filePath = public_path('uploads/schools/syllabus') . '/' . $fileName;
                    if (file_exists($filePath)) {
                        $modifiedFiles[$file_index] = asset("uploads/schools/syllabus/" . $fileName);
                    }
                }
                $homework->files = $modifiedFiles;
            }

            unset($homeworks[$key]['due_date'],$homeworks[$key]['status'],$homeworks[$key]['type'],$homeworks[$key]['created_by_staff']);
        }

        if(count($homeworks) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Home Works.',
                'data' => $homeworks
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function deleteSyllabus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $homeworkID = HomeWork::where('id',$request->id)->where('type','syllabus')->first();
        if(!$homeworkID)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Home Work Found.'
            ],404);
        }

        $homeworkID->is_deleted = '1';
        $result = $homeworkID
        ->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Syllabus has been deleted successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function editSyllabus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
            'title' => 'required',
            'syllabus_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        if(empty($request->description) AND count($request->files) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Input any one description or file'
            ],400);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $homework = HomeWork::where('id',$request->syllabus_id)->where('type','syllabus')->first();
        if(!$homework)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Home Work Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $homework->school_id = $school->id;
        $homework->created_by_staff = $staff->id;
        $homework->class_id = $request->class_id;
        $homework->section_id = $request->section_id;
        $homework->type = "syllabus";
        $homework->title = $request->title;
        $homework->description = $request->description;
        if ($request->hasFile('files')) {
            $fileNames = [];
            foreach ($request->file('files') as $file) {
                $image = $file;
                $imageName = Auth::user()->id . time() . rand(0, 99) . '.' . $image->extension();
                $image->move(public_path('uploads/schools/syllabus'), $imageName);
                $fileNames[] = $imageName;
            }
            $homework->files = implode(',', $fileNames);
        }
        else
        {
            $homework->files = null;
        }
        $result = $homework->save();
        if($result)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Syllabus has been updated successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ],400);
        }
    }

    public function viewResources(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'subject_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $subjectCount = Subject::find($request->class_id);
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $resources = StudyMaterial::select('id','title','type','subject_id')
        ->with('subject')
        ->where('school_id',$school->id)->where('is_deleted','0')
        ->where('class_id',$request->class_id)->where('subject_id',$request->subject_id)->get();

        if(count($resources) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Resources',
                'data' => $resources
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found'
            ],404);
        }
    }

    public function detailResources(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'resource_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $resource = StudyMaterial::where('school_id',$school->id)->where('is_deleted','0')
        ->where('id',$request->resource_id)->first();

        if(!empty($resource))
        {
            if(!empty($resource->media) AND file_exists(public_path('uploads/schools/study-material').'/'.$resource->media))
            {
                $resource['media'] = asset("uploads/schools/study-material/".$resource->media);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Detail Resources',
                'data' => $resource
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found'
            ],404);
        }
    }

    public function viewTimeTable(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'section_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $classCount = Classes::find($request->class_id);
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::find($request->section_id);
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $assign_periods = TimeTableAssignPeriod::where('school_id',$school->id)->where('class_id',$class_id)
        ->where('section_id',$section_id)->get();
        if(count($assign_periods) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $timetablesetting = TimeTableSetting::find($assign_periods[0]->time_table_setting_id);
        $weekdays = json_decode($timetablesetting->weekdays);

        $finalResponse = null;
        foreach($weekdays as $key => $weekday)
        {
            $finalResponse[$key]['day'] = $weekday;
            foreach($assign_periods as $index => $assign_period)
            {
                $periods[$index]['class'] = $assign_period->class->name;
                $periods[$index]['section'] = $assign_period->section->name;
                $periods[$index]['subject'] = $assign_period->period->title;
                $periods[$index]['teacher'] = $assign_period->staff->first_name . ' ' . $assign_period->staff->last_name;
                $periods[$index]['start_time'] = $assign_period->period->start_time;
                $periods[$index]['end_time'] = $assign_period->period->end_time;
            }
            $finalResponse[$key]['periods'] = $periods;
        }

        return response()->json([
            'status' => 'success',
            'message' => 'All Data',
            'data' => $finalResponse
        ],200);
    }

    public function viewAllExam()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $exams = Exam::with('fromClass','toClass','examTimeSheet.class','examTimeSheet.class.assignedSections.section','examTimeSheet.subject')
        ->where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->get();

        if($exams)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'View All Exam',
                'data' => $exams
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function examList()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $exams = Exam::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->get();
        // $exams = Exam::with('fromClass','toClass','examTimeSheet.class','examTimeSheet.class.assignedSections.section','examTimeSheet.subject')->where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->get();

        if(count($exams) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'All Data',
                'data' => $exams
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function examDetail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $exams = Exam::with('fromClass','toClass','examTimeSheet.class','examTimeSheet.class.assignedSections.section','examTimeSheet.subject')
        ->where('id',$request->exam_id)
        ->where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->first();

        if($exams)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Exam Detail',
                'data' => $exams
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function examSysllabusList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $examCount = Exam::where('id',$request->exam_id)->where('school_id',$school->id)->first();
        if(!$examCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Exam Found.'
            ],404);
        }

        $classCount = Classes::where('id',$request->class_id)->where('school_id',$school->id)->first();
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $subjectCount = Subject::where('id',$request->subject_id)->where('school_id',$school->id)->first();
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }

        $syllabusList = Syllabus::with('exam')->select('id','title','exam_id')
        ->where('school_id',$school->id)
        ->where('exam_id',$request->exam_id)
        ->where('class_id',$request->class_id)
        ->where('subject_id',$request->subject_id)
        ->where('is_deleted','0')->OrderBy('id','DESC')->get();

        if(count($syllabusList) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'All Data',
                'data' => $syllabusList
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function examSysllabusDetail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'syllabus_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $syllabus = Syllabus::with('exam','class','subject')->where('school_id',$school->id)->where('id',$request->syllabus_id)->first();
        if(!$syllabus)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }

        if(!empty($syllabus->file) AND file_exists(public_path('uploads/schools/syllabus').'/'.$syllabus->file))
        {
            $syllabus['file'] = asset('uploads/schools/syllabus/'.$syllabus->file);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'All Data',
            'data' => $syllabus
        ],200);
    }

    public function viewTeacherTimeTable()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $assign_periods = TimeTableAssignPeriod::where('school_id',$school->id)->where('staff_id',$staff->id)->get();
        if(count($assign_periods) == 0)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $timetablesetting = TimeTableSetting::find($assign_periods[0]->time_table_setting_id);
        $weekdays = json_decode($timetablesetting->weekdays);

        $finalResponse = null;
        foreach($weekdays as $key => $weekday)
        {
            $finalResponse[$key]['day'] = $weekday;
            foreach($assign_periods as $index => $assign_period)
            {
                $periods[$index]['class'] = $assign_period->class->name;
                $periods[$index]['section'] = $assign_period->section->name;
                $periods[$index]['subject'] = $assign_period->period->title;
                $periods[$index]['teacher'] = $assign_period->staff->first_name . ' ' . $assign_period->staff->last_name;
                $periods[$index]['start_time'] = $assign_period->period->start_time;
                $periods[$index]['end_time'] = $assign_period->period->end_time;
            }
            $finalResponse[$key]['periods'] = $periods;
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Teacher TimeTable',
            'data' => $finalResponse
        ],200);
    }

    public function createResult(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required',
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'student_id' => 'required',
            'obtained_marks' => 'required',
            'total_marks' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $examCount = Exam::where('id',$request->exam_id)->where('school_id',$school->id)->first();
        if(!$examCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Exam Found.'
            ],404);
        }

        $classCount = Classes::where('id',$request->class_id)->where('school_id',$school->id)->first();
        if(!$classCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Class Found.'
            ],404);
        }

        $sectionCount = Section::where('id',$request->section_id)->where('school_id',$school->id)->first();
        if(!$sectionCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Section Found.'
            ],404);
        }

        $subjectCount = Subject::where('id',$request->subject_id)->where('school_id',$school->id)->first();
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }

        $studentCount = Student::where('id',$request->student_id)->where('school_id',$school->id)->first();
        if(!$studentCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],404);
        }

        $StudentResultData = StudentResult::where([
            'school_id'=> $school->id,
            'exam_id'=>$examCount->id,
            'class_id'=>$classCount->id,
            'section_id'=>$sectionCount->id,
            'staff_id'=>$staff->id,
            'subject_id'=>$subjectCount->id,
            'student_id'=>$studentCount->id,
            ])->first();

        $message = "";
        if($StudentResultData)
        {
            $student_result = StudentResult::find($StudentResultData->id);
            $message = "updated";
        }
        else
        {
            $student_result = new StudentResult;
        }

        $student_result->school_id = $school->id;
        $student_result->exam_id = $request->exam_id;
        $student_result->class_id = $request->class_id;
        $student_result->section_id = $request->section_id;
        $student_result->staff_id = $staff->id;
        $student_result->subject_id = $request->subject_id;
        $student_result->student_id = $request->student_id;
        $student_result->obtained_marks = $request->obtained_marks;
        $student_result->total_marks = $request->total_marks;
        $student_result->save();

        if($message == "updated")
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Student Result updated Successfully'
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Student Result added Successfully'
            ],200);
        }
    }

    public function viewResult(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required',
            'class_id' => 'required',
            'section_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $staff = Staff::where('username',Auth::user()->username)->first();

        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $exam_id = $request->exam_id;
        $subjects = [];
        $students = [];
        $student_results = [];
        $allStudents = [];

        $studentsQuery = StudentClassAssign::where('school_id', $school->id)->where('class_id', $class_id)->where('section_id', $section_id);
        $student_results = StudentResult::where('school_id',$school->id)->where('class_id', $class_id)->where('section_id', $section_id)->get();
        if(!empty($request->student_id))
        {
            $studentsQuery->where('student_id',$request->student_id);
        }

        if(!empty($request->subject_id))
        {
            $subject = Subject::find($request->subject_id);
            $subjects[] = [
                'id' => $subject->id,
                'name' => $subject->name
            ];
        }
        else
        {
            $subjects = getSubjectsByClass($class_id);
        }
        $students = $studentsQuery->get();

        $studentData = null;
        foreach($students as $key => $student)
        {
            $db_student = Student::find($student->student_id);

            $subjectsData = null;
            foreach ($subjects as $subject) {
                $subjectData = [
                    'id' => $subject['id'],
                    'name' => $subject['name'],
                    'obtained_marks' => (float) getSubjectObtainedMarks($request->exam_id, $request->class_id, $request->section_id, $subject['id'], $student->student_id),
                    'total_marks' => (float) getSubjectTotalMarks($request->exam_id, $request->class_id, $request->section_id, $subject['id']),
                ];

                $studentSubjects[] = $subjectData;
            }

            $studentData[$key] = $db_student;
            $studentData[$key]['subjects'] = $studentSubjects;

        }

        if(count($studentData) > 0)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'View Results',
                'data' => $studentData
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function allExamAgainstSubjects()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $student_assign_classess = StudentClassAssign::where('school_id',$this->school->id)->where('student_id',$this->student->id)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        
        $class_id = $student_assign_classess->class_id;
        $subject_wise_results = [];
        $get_assign_subject = ClassAssignSubject::select('subject_id', 'subjects.name as subject_name')
            ->join('subjects', 'class_assign_subjects.subject_id', '=', 'subjects.id')
            ->where('subjects.school_id', $this->school->id)
            ->where('class_assign_subjects.class_id', $class_id)
            ->get();
        $get_exams_against_class = Exam::select('id', 'title')
            ->where('school_id', $school->id)
            ->where('is_deleted', '0')
            ->where('from_class', '<=', $class_id)
            ->where('to_class', '>=', $class_id)
            ->orderBy('id', 'DESC')
            ->get();
        foreach ($get_assign_subject as $subject) {
            $subject_results = [];
            foreach ($get_exams_against_class as $exam) {
                $student_result = StudentResult::select('obtained_marks', 'total_marks', 'id')
                    ->where('school_id', $this->school->id)
                    ->where('class_id', $class_id)
                    ->where('subject_id', $subject->subject_id)
                    ->where('exam_id', $exam->id)
                    ->where('student_id', $this->student->id)
                    ->first();
                $subject_results[] = [
                    'exam_id' => $exam->id,
                    'exam_title' => $exam->title,
                    'obtained_marks' => $student_result ? $student_result->obtained_marks : 0,
                    'total_marks' => $student_result ? $student_result->total_marks : 0,
                    'percentage' => $student_result ? (($student_result->obtained_marks*100)/$student_result->total_marks) : 0,
                ];
            }
            $subject_wise_results[] = [
                'subject_id' => $subject->subject_id,
                'subject_name' => $subject->subject_name,
                'results' => $subject_results,
            ];
        }
        // return $subject_wise_results;
        if($subject_wise_results)
        {
            return response()->json([
                'status' => 'success',
                'message' => 'View All Exam',
                'data' => $subject_wise_results
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

}
