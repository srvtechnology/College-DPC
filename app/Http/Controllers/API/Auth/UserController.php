<?php

namespace App\Http\Controllers\API\Auth;

use Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Staff;
use App\Models\School;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PushNotification;
use App\Models\StaffAssignClass;
use App\Models\StudentFeePayment;
use Illuminate\Support\Facades\DB;
use App\Models\StudentFeeStructure;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use App\Models\Session;


class UserController extends Controller
{
    public function checkSchool(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'type' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $school = School::where('username',$request->code)->where('is_deleted','0')->first();
        if($school)
        {
            if($school->status == "active")
            {
                $session = Session::where(['school_id' => $school->id, 'is_deleted'=>'0', 'is_active'=>'1'])->OrderBy("id","desc")->first();
                if($session){
                    return response()->json([
                        'status' => 'success',
                        'message' => 'School is valid',
                        'data' => $session
                    ],200);
                }else{
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Session is not created',
                        'data' => []
                    ],400);
                }
            }
            else
            {
                if($school->status == "pending")
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'School is not verified Yet'
                    ],401);
                }
                else
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'School is blocked'
                    ],400);
                }

            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'School Not Found'
            ],404);
        }
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'password' => 'required',
            'school_code' => 'required',
            'type' => 'required',
            'device_token' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ],422);
        }

        $school = getSchoolInfoByUsername($request->school_code);
        if(!$school)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'School Not Found'
            ],404);
        }
        if (filter_var($request->code, FILTER_VALIDATE_EMAIL)) {
            if (Auth::attempt(['school_id' => $school->id,'email' => $request->code,'type' => $request->type,'password' => $request->password,'status' => 'active','is_deleted' => '0'])) {
                $user = Auth::user();
                $token = $user->createToken('MyAppToken')->accessToken;
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid Code or Password'
                ],401);
            }
        } else {
            if (Auth::attempt(['school_id' => $school->id,'username' => $request->code,'type' => $request->type, 'password' => $request->password,'status' => 'active','is_deleted' => '0'])) {
                $user = Auth::user();
                $user->device_token = $request->device_token;
                $user->save();
                $token = $user->createToken('MyAppToken')->accessToken;
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid Code or Password'
                ],401);
            }
        }
        if(!empty($token))
        {
            $data = [
                'user' => $user,
                'school' => $school
            ];
            return response()->json([
                'status' => 'success',
                'token' => $token,
                'data' => $data,
            ],200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid username or password'
        ],401);
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ],422);
        }

        $user = User::where('email',$request->email)->first();
        $random_password = Str::random(8);
        $user->password = Hash::make($random_password);
        $user->save();

        Mail::send('email.school.forgotPassword', ['name' => $user->name,'email'=>$user->email,'username'=>$user->username,'password'=>$random_password], function($message) use($request){
            $message->to($request->email);
            $message->subject('Teacher Login Credentials');
        });

        return response()->json([
            'status' => 'success',
            "message" => 'New Password has been sent to you.Kindly check your email.',
        ]);

        // $token = Str::random(64);

        //   DB::table('password_resets')->insert([
        //       'email' => $request->email,
        //       'token' => $token,
        //       'created_at' => Carbon::now()
        //     ]);

        // Mail::send('email.forgetPassword', ['token' => $token,'email' => $request->email], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Reset Password');
        // });

        // return response()->json([
        //     'status' => 'success',
        //     "message" => 'Reset password link sent on your email id.',
        //     'token' => $token,
        //     'email' => $request->email
        // ]);

    }

    public function resetPassword(Request $request) {
        $credentials = $request->all();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'token' => 'required|string',
            'password' => 'required|string|min:6|same:confirm_password',
            'confirm_password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ],422);
        }

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

          if(!$updatePassword){
              return response()->json([
                'status' => 'error',
                'message' => 'Invalid token!'
            ],401);
          }

        User::where('email', $request->email)
            ->update([
                'password' => Hash::make($request->password)
            ]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return response()->json([
            "status" => "success",
            "message" => "Password has been successfully changed"
        ],200);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        return response()->json(['message' => 'Successfully logged out.']);
    }

    public function notification_list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school_id' => 'required',
            'type' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ],422);
        }

        $school = School::find($request->school_id);
        if(!$school)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'School Not Found'
            ],404);
        }

        $notifications = PushNotification::whereJsonContains('type', ucfirst($request->type))->get();

        if ($notifications->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'Record Not Found'], 404);
        }

        return response()->json(['status' => 'success', 'data' => $notifications], 200);

    }

    public function students_list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
        ]);

        $student = Student::with('assignClasses.class','assignClasses.section')->find($request->student_id);
        if(!empty($student->image) AND file_exists(public_path('uploads/schools/student').'/'.$student->image))
        {
            $student['image'] = asset('uploads/schools/student/'.$student->image);
        }
        // $staffAssignClass = StaffAssignClass::where('class_id',$student->assignClasses[0]->class_id)->where('section_id',$student->assignClasses[0]->section_id)->first();
        // $staff = Staff::find($staffAssignClass->staff_id);

        // foreach($student['assignClasses'] as $student_assign_class)
        // {
        //     $student['teacher'] = $staff;
        // }

        foreach($student['assignClasses'] as $key => $student_assign_class)
        {
            $staffAssignClass = StaffAssignClass::where('class_id',$student_assign_class->class_id)->where('section_id',$student_assign_class->section_id)->get();

            foreach($staffAssignClass as $staff_assign_class)
            {
                $staff = Staff::find($staff_assign_class->staff_id);
                if(!empty($staff->image) AND file_exists(public_path('uploads/schools/logo').'/'.$staff->image))
                {
                    $staff['image'] = asset('uploads/schools/logo/'.$staff->image);
                }
                $staff_list[] = $staff;
            }
            $student['assignClasses'][$key]['teacher'] = $staff_list;
        }


        if(!$student)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Student Not Found'
            ],404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $student
        ], 200);
    }

    public function student_fee_payment_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'school_code' => 'required',
        ]);

        $school = School::where('username',$request->school_code)->where('is_deleted','0')->first();
        if($school)
        {
            $student_fee_payments = StudentFeePayment::with('feeStructure')->where('school_id',$school->id)->where('student_id',$request->student_id)->get();
            if(count($student_fee_payments) > 0)
            {
                return response()->json([
                    'status' => 'success',
                    'data' => $student_fee_payments
                ], 200);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Record Not Found'
                ],404);
            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'School Not Found'
            ],404);
        }
    }
}
