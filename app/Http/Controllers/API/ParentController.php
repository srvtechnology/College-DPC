<?php

namespace App\Http\Controllers\API;

use DateTime;
use App\Models\Exam;
use App\Models\User;
use App\Models\Staff;
use App\Models\School;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Subject;
use App\Models\HomeWork;
use App\Models\Session;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use App\Models\StudentResult;
use App\Models\StudyMaterial;
use App\Models\TimeTableSetting;
use App\Models\StudentAttendance;
use App\Models\StudentClassAssign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\TimeTableAssignPeriod;
use App\Models\StudentLeaveApplication;
use App\Models\ClassAssignSubject;
use Illuminate\Support\Facades\Validator;

class ParentController extends Controller
{
    protected $user;
    protected $parent;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->initializeVariables();

            return $next($request);
        });
    }

    protected function initializeVariables()
    {
        $this->user = User::where('id', Auth::user()->id)->first();
        $this->school = $this->user->school;
        $this->parent = Parents::where('user_id',Auth::user()->id)->first();
    }

    public function detail()
    {
        $school_code = request()->school_code;
        $school = School::where('username',$school_code)->first();
        if(!$school){
            return response()->json([
                'status' => 'error',
                'message' => 'No School Found'
            ],422);
        }

        $students = null;
        $user = User::where('id',Auth::user()->id)->first();
        $parent = Parents::where('user_id',$user->id)->first();
        $user['phone'] = $parent->phone;
        $user['emergency_phone'] = $parent->emergency_phone;
        $students = Student::with('assignClasses.class','assignClasses.section','fees')->where(['school_id' => $school->id,'parent_id' => $parent->id])->where('is_deleted','0')->get();
        foreach ($students as $key => $value) {
            // echo $value->image;
            $value->image = asset('uploads/schools/student/'.$value->image);
        }
        $parent['children'] = $students;

        return response()->json([
            'status' => 'success',
            'message' => 'Student Detail',
            'data' => $parent
        ],200);
    }

    public function getChildrenDetail()
    {
        $school_code = request()->school_code;
        $school = School::where('username',$school_code)->first();
        if(!$school){
            return response()->json([
                'status' => 'error',
                'message' => 'No School Found'
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $parent = Parents::where('user_id',$user->id)->first();
        $students = Student::with('assignClasses.class','assignClasses.section','fees')->where(['school_id' => $school->id,'parent_id' => $parent->id])->where('is_deleted','0')->get();

        if(count($students) > 0)
        {
            $students->each(function($student){
                if(!empty($student->image) AND file_exists(public_path('uploads/schools/student').'/'.$student->image))
                {
                    $student['image'] = asset('uploads/schools/student/'.$student->image);
                }
            });

            return response()->json([
                'status' => 'success',
                'message' => 'List of Children',
                'data' => $students
            ],200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Record Not Found',
            ],422);
        }
    }

    public function viewHomeWork(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'subject_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        $subjectCount = Subject::where('id',$request->subject_id)->first();
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }

        $student_assign_classess = StudentClassAssign::where('student_id',$student->id)->first();
        if($student_assign_classess)
        {
            $homeworks = HomeWork::with('class','section','subject')->select('id','title','description','files','due_date','date','class_id','section_id','subject_id')->where('class_id',$student_assign_classess->class_id)->where('section_id',$student_assign_classess->section_id)
                ->where('subject_id',$request->subject_id)
                ->where('type','homework')->where('is_deleted','0')->OrderBy('id','DESC')->get();
                if(count($homeworks) > 0)
                {
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
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function viewSyllabus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        $student_assign_classess = StudentClassAssign::where('student_id',$student->id)->first();
        if($student_assign_classess)
        {
            $homeworks = HomeWork::select('id','title','description','files','date')->where('class_id',$student_assign_classess->class_id)->where('section_id',$student_assign_classess->section_id)
                ->where('type','syllabus')->where('is_deleted','0')->OrderBy('id','DESC')->get();
                if(count($homeworks) > 0)
                {
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
                    }
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
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
    }

    public function viewTimeTable(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        $student_assign_classess = StudentClassAssign::where('student_id',$student->id)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $class_id = $student_assign_classess->class_id;
        $section_id = $student_assign_classess->section_id;
        $assign_periods = TimeTableAssignPeriod::where('class_id',$class_id)
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

    public function viewAttendance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $session = Session::where('school_id',$this->school->id)->where('is_active','1')->where('is_deleted','0')->first();
        
        if(!$session)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Session Not Active'
            ],404);
        }
        
        $from_date = date("Y-m-d",strtotime($session->start_date));
        $to_date = date("Y-m-d");

        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        if($from_date > $to_date)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Kindly select right date'
            ],400);
        }
        $dateList = calculateDatesBetween($from_date,$to_date);

        //Calculate days
        $startDate = new DateTime($from_date);
        $endDate = new DateTime($to_date);
        $interval = $startDate->diff($endDate);
        $daysCount = $interval->days;

        $prensentHistory = StudentAttendance::select('date','attendance')->where('student_id',$student->id)
            ->whereDate('date','>=',$from_date)->whereDate('date','<=',$to_date)
            ->where('attendance','1')->get();

        $absentHistory = StudentAttendance::select('date','attendance')->where('student_id',$student->id)
            ->whereDate('date','>=',$from_date)->whereDate('date','<=',$to_date)
            ->where('attendance','0')->get();

        $leaveHistory = StudentAttendance::select('date','attendance')->where('student_id',$student->id)
            ->whereDate('date','>=',$from_date)->whereDate('date','<=',$to_date)
            ->where('attendance','2')->get();

        $prensentHistoryPercentage = (count($prensentHistory) / $daysCount) * 100;
        $prensentHistoryPercentage = number_format($prensentHistoryPercentage, 2);

        $absentHistoryPercentage = (count($absentHistory) / $daysCount) * 100;
        $absentHistoryPercentage = number_format($absentHistoryPercentage, 2);

        $leaveHistoryPercentage = (count($leaveHistory) / $daysCount) * 100;
        $leaveHistoryPercentage = number_format($leaveHistoryPercentage, 2);

        $history = [
            'present_percentage' => (float)$prensentHistoryPercentage,
            'absent_percentage' => (float)$absentHistoryPercentage,
            'leave_percentage' => (float)$leaveHistoryPercentage,
            'attendance_not_added_percentage' => 100 - ($prensentHistoryPercentage + $absentHistoryPercentage + $leaveHistoryPercentage)
        ];

        $response = [
            'history' => $history,
            'present' => $prensentHistory,
            'absent' => $absentHistory,
            'leave' => $leaveHistory
        ];
        // return $response;

        return response()->json([
                'status' => 'success',
                'message' => 'Successfully',
                'data' => $response
        ],200);

        // $attendance_history = [
        //     'absent_history' =>
        // ];
        return $attendance_history;

        // foreach($dateList as $dateData)
        // {
        //     return getStudentAttendance($request->class_id,$request->section_id,$this->student->id,$dateData['date']);
        // }
        // return "end";

        // $attendance_bit = getStudentAttendance($request->class_id,$request->section_id,$this->student->id,$date);
        // if($attendance_bit == "-")
        // {
        //     $attendance_bit = null;
        // }
        // $response[] = [
        //     'id' => $student->id,
        //     'name' => $student->first_name.' '.$student->last_name,
        //     'gender' => $student->gender,
        //     'attendance' => $attendance_bit,
        //     'date' =>$date
        // ];
    }

    public function viewResources(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'subject_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $subjectCount = Subject::where('id',$request->subject_id)->where('school_id',$this->school->id)->first();
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }

        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        $student_assign_classess = StudentClassAssign::where('student_id',$student->id)->first();
        if($student_assign_classess)
        {
            $resources = StudyMaterial::with('subject')
            ->where('subject_id',$request->subject_id)
            ->where('is_deleted','0')
            ->where('class_id',$student_assign_classess->class_id)->get();
            if(count($resources) > 0)
            {
                foreach ($resources as $key => $resource) {
                    if(!empty($resource->media))
                    {
                        $filePath = public_path('uploads/schools/study-material') . '/' . $resource->media;
                        if (file_exists($filePath)) {
                            $resources[$key]["media"] = asset("uploads/schools/study-material/" . $resource->media);
                        }
                    }
                }
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
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found'
            ],404);
        }


    }

    public function applyLeave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'school_code' => 'required',
            'date' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $school = School::where('username',$request->school_code)->first();
        if(!$school)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No School Found.'
            ],422);
        }

        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

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

        $student_assign_classess = StudentClassAssign::where('student_id',$student->id)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $staff = Staff::where('assign_class_to_class_teacher',$student_assign_classess->class_id)
        ->where('assign_section_to_class_teacher',$student_assign_classess->section_id)->where('is_deleted','0')->first();

        $leave_application = new StudentLeaveApplication;
        $leave_application->school_id = $school->id;
        $leave_application->staff_id = $staff->id;
        $leave_application->student_id = $student->id;
        $leave_application->subject = "Leave Application";
        $leave_application->message = !empty($request->message) ? $request->message : "";
        $leave_application->date = date("Y-m-d",strtotime($request->date));
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

    public function viewLeaveApplication(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }
        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }

        $leave_applications = StudentLeaveApplication::where('student_id',$student->id)->OrderBy('id','DESC')->get();
        if(count($leave_applications) > 0)
        {
            foreach($leave_applications as $key => $leave_application)
            {
                if(!empty($leave_application->file) AND file_exists(public_path('uploads/schools/leave').'/'.$leave_application->file))
                {
                    $leave_applications[$key]['file'] = asset("uploads/schools/leave/".$leave_application->file);
                }
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

    public function viewResult(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exam_id' => 'required',
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
            ],422);
        }


        $subjects = [];

        $student_assign_classess = StudentClassAssign::where('school_id',$this->school->id)->where('student_id',$student->id)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $class_id = $student_assign_classess->class_id;
        $section_id = $student_assign_classess->section_id;

        $studentsQuery = StudentClassAssign::where('school_id', $this->school->id)->where('class_id', $class_id)->where('section_id', $section_id);
        $student_results = StudentResult::where('school_id',$this->school->id)->where('class_id', $class_id)->where('section_id', $section_id)->get();
        $studentsQuery->where('student_id',$request->student_id);

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
                    'obtained_marks' => (float) getSubjectObtainedMarks($request->exam_id, $class_id, $section_id, $subject['id'], $student->student_id),
                    'total_marks' => (float) getSubjectTotalMarks($request->exam_id, $class_id, $section_id, $subject['id']),
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

    public function viewAllExam()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;

        $parent = Parents::where('user_id',$user->id)->first();
        $students = Student::with('assignClasses.class','assignClasses.section','fees')->where(['school_id' => $school->id,'parent_id' => $parent->id])->where('is_deleted','0')->pluck('id')->toArray();
        // return $students;
        
        $student_assign_classess = StudentClassAssign::where('school_id',$this->school->id)->whereIn('student_id',$students)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $class_id = $student_assign_classess->class_id;
        $section_id = $student_assign_classess->section_id;

        $exams = Exam::with('fromClass', 'toClass', 'examTimeSheet.class', 'examTimeSheet.subject')
            ->where('school_id', $school->id)
            ->where('is_deleted', '0')
            ->whereHas('fromClass', function ($query) use ($class_id) {
                $query->where('id', '<=', $class_id);
            })
            ->whereHas('toClass', function ($query) use ($class_id) {
                $query->where('id', '>=', $class_id);
            })
            ->orderBy('id', 'DESC')
            ->get();
        
        $obtained_marks = $percentage = 0;
        foreach($exams as $exam)
        {
            foreach($exam->examTimeSheet as $examTimeSheet)
            {
                $student_result = StudentResult::where('school_id',$this->school->id)->where('class_id', $class_id)->where('section_id', $section_id)->where('subject_id', $examTimeSheet->subject_id)->whereIn('student_id', $students)->first();
                if($student_result)
                {
                    $obtained_marks = $student_result->obtained_marks ? $student_result->obtained_marks : 0;
                }
                else
                {
                    $obtained_marks = 0;
                }
                if($obtained_marks != 0)
                {
                    $percentage = ($obtained_marks / $examTimeSheet->total_marks) * 100;
                }

                $examTimeSheet['obtained_marks'] = (double)$obtained_marks;
                $examTimeSheet['percentage'] = (double)$percentage;
            }
        }

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

        $exams = Exam::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('id','DESC')->get();

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
            'subject_id' => 'required',
            'student_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $student = Student::find($request->student_id);
        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Student Found.'
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

        $subjectCount = Subject::where('id',$request->subject_id)->where('school_id',$school->id)->first();
        if(!$subjectCount)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Subject Found.'
            ],404);
        }

        $student_assign_classess = StudentClassAssign::where('school_id',$school->id)->where('student_id',$student->id)->first();
        if(!$student_assign_classess)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No Record Found.'
            ],404);
        }
        $class_id = $student_assign_classess->class_id;
        $section_id = $student_assign_classess->section_id;

        $syllabusList = Syllabus::with('exam')->select('id','title','exam_id')
        ->where('school_id',$school->id)
        ->where('exam_id',$request->exam_id)
        ->where('class_id',$class_id)
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

    public function allExamAgainstSubjects(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $user = User::where('id',Auth::user()->id)->first();
        $school = $user->school;
        $student_assign_classess = StudentClassAssign::where('school_id',$this->school->id)->where('student_id',$request->student_id)->first();
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
                    ->where('student_id', $request->student_id)
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
