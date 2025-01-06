<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Role;
use App\Models\User;
use App\Models\Staff;
use App\Models\School;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PermissionRole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::where('is_deleted','0')->OrderBy('id',"desc")->paginate(10);
        return view('superadmin.school.index')->with(compact('schools'));
    }

    public function create()
    {
        return view('superadmin.school.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'contact_number'    => 'required',
            'landline_number'    => 'required',
            'affilliation_number'  => 'required',
            'board'  => 'required',
            'type'  => 'required',
            'medium'  => 'required',
            'address'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = Auth::user()->id.time() . '.' . $image->extension();
            $image->move(public_path('uploads/schools'), $imageName);
            $data['image'] = $imageName;
        }
        $username = $this->generateUserName($request->name);
        $random_password = $username.'@'.date("Y");
        $data['created_by'] = Auth::user()->id;
        $data['password']   = Hash::make($random_password);
        $data['username'] = $username;

        $existUser = User::where('email',$request->email)->first();
        if(!$existUser)
        {
            $existUser = User::create([
                'name'  => $request->name,
                'username' => $username,
                'email' => $request->email,
                'password' => $data['password'],
                'random_pwd_string' => $random_password,
                'type'  => 'school',
                'role_id'   =>  11
            ]);
        }
        $data['user_id'] = $existUser->id;
        $result = School::create($data);
        $checkRole = Role::where('school_id',$result->id)->where('name','School Admin')->first();
        if(!$checkRole)
        {
            $role = new Role;
            $role->school_id = $result->id;
            $role->name = "School Admin";
            $role->save();
            $permissions = Permission::get();
            foreach($permissions as $permission)
            {
                $item = new PermissionRole();
                $item->permission_id = $permission->id;
                $item->role_id = $role->id;
                $item->save();
            }
        }
        $existUser->role_id = $role->id;
        $existUser->save();

        if($result)
        {
            // Mail::send('email.school.register', ['name' => $request->name,'email'=>$request->email,'username'=>$username,'password'=>$random_password], function($message) use($request){
            //     $message->to($request->email);
            //     $message->subject('School Login Credentials');
            // });
        }
        return to_route('superadmin.schools')->with('success','School Added Successfully');
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('superadmin.school.edit')->with(compact('school'));
    }

    public function update(Request $request)
    {
        $school = School::find($request->id);
        $user = User::where('username',$school->username)->first();
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'contact_number'    => 'required',
            'landline_number'    => 'required',
            'affilliation_number'  => 'required',
            'board'  => 'required',
            'type'  => 'required',
            'medium'  => 'required',
            'address'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->except('_token');
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = Auth::user()->id.time() . '.' . $image->extension();
            $image->move(public_path('uploads/schools'), $imageName);
            $data['image'] = $imageName;
        }
        School::where('id',$request->id)->update($data);
        User::where('username',$school->username)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return to_route('superadmin.schools')->with('success','School Added Successfully');
    }

    public function detail($id)
    {
        $school = School::findOrFail($id);
        $total_teachers = Staff::where('school_id',$school->id)->where('is_deleted','0')->count();
        $total_students = Student::where('school_id',$school->id)->where('is_deleted','0')->count();
        $total_parents = User::where('type','parent')->where('school_id',$school->id)->count();

        return view('superadmin.school.detail')->with(compact('school','total_teachers','total_students','total_parents'));
    }

    public function block(Request $request)
    {
        $school = School::find($request->id);
        $user = User::where('username',$school->username)->first();
        $user->status = $user->status == "blocked" ? "active" : "blocked";
        $user->save();

        $school->status = $school->status == "blocked" ? "active" : "blocked";
        $school->save();
        return back()->with('success','School Block Successfully');
    }

    public function delete(Request $request)
    {
        $school = School::find($request->id);
        $user = User::where('username',$school->username)->first();
        $user->is_deleted = "1";
        $user->save();

        $school->is_deleted = "1";
        $school->save();
        return back()->with('success','School Deleted Successfully');
    }

    public function studentList($id)
    {
        $school = School::findOrFail($id);
        $students = Student::where('school_id',$school->id)->where('is_deleted','0')->OrderBy("id", 'desc')->paginate(10);

        return view('superadmin.school.student_list')->with(compact('school','students'));
    }

    public function teacherList($id)
    {
        $school = School::findOrFail($id);
        $staffs = Staff::where('school_id', $school->id)->where('is_deleted','0')->OrderBy('id','DESC')->paginate(10);

        return view('superadmin.school.teacher_list')->with(compact('school','staffs'));
    }

    public function parentList($id)
    {
        $school = School::findOrFail($id);
        
        $parentsID = Student::where('school_id',$school->id)->where('parent_id','!=',null)->where('is_deleted','0')->get()->pluck('parent_id')->unique();
        $parents = Parents::whereIn('id',$parentsID)->OrderBy("id", 'desc')->paginate(10);

        return view('superadmin.school.parent_list')->with(compact('school','parents',));
    }
}
