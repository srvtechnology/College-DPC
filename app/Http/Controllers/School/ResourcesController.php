<?php

namespace App\Http\Controllers\School;

use App\Models\Classes;
use App\Models\Section;
use App\Models\HomeWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{
    public function homeWork()
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $classes = Classes::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('name','ASC')->get();
        $sections = Section::where(['school_id' => $school->id, 'is_deleted' => '0'])->OrderBy('name','ASC')->get();
        $homeworks = [];
        $subjects = [];
        if(!empty(request()->class_id) AND !empty(request()->section_id))
        {
            $class_id = request()->class_id;
            $section_id = request()->section_id;

            $query = HomeWork::where('class_id',$class_id)->where('section_id',$section_id);
            if(!empty(request()->subject_id))
            {
                $query->where('subject_id',request()->subject_id);
            }
            $homeworks = $query->where('type','homework')->where('is_deleted','0')->OrderBy('id','DESC')->paginate(10);


        }

        return view("school.resources.home-work")->with(compact('school','classes','sections','homeworks'));
    }

    public function homeWorkDetail($id)
    {
        $school = getSchoolInfoByUsername(Auth::user()->username);
        $homework = HomeWork::where('id',$id)->where('type','homework')->where('is_deleted','0')->first();
        if(!$homework)
        {
            return back()->with('error','Record Not Found');
        }

        return view("school.resources.home-work-detail")->with(compact('school','homework'));
    }
}
