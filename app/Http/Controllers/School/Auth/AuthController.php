<?php

namespace App\Http\Controllers\School\Auth;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public $school;
    public function __construct(){
        $this->school = getSchoolInfoByUsername(request()->segment(1));
    }

    public function login()
    {
        $school = $this->school;
        $sessions = Session::where('is_deleted',1)->get();
        return view("school.auth.login")->with(compact('school','sessions'));
    }

    public function loginProcess(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

            $session = Session::where('id',$request->session)->first();

            if ($session->is_active == 0) {
                return back()->with('error','Session is not active please contact with the admin');
            }
            $current_date = date("Y-m-d");
                if ($current_date > $session->end_date) {
                    return back()->with('error','Session is expired please contact with the admin');
                }

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password,'status' => 'active','is_deleted' => '0']) )
        {
            $user = Auth::user();
            Auth::login($user);
            \Session::put('ses',$session);
            \Cache::put('ses',$session);
            // return \Cache::get('ses');
            return to_route('school.dashboard');
        }

        return back()->with('error','Invalid username or password');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('school.login');
        // return to_route('school.login',$this->school->username);
    }

    public function reset()
    {
        return view("school.auth.reset-password");
    }
}
