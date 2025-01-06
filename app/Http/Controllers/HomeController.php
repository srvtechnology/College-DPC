<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\School;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $total_schools = School::where('is_deleted','0')->count();
        $total_teachers = Staff::where('is_deleted','0')->count();
        $total_students = Student::where('is_deleted','0')->count();
        $total_parents = Parents::count();

        return view('home',compact('user','total_schools','total_teachers','total_students','total_parents'));
    }
}
