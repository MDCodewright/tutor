<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;

class TutorController extends Controller
{
    //
    public function tutor()
    {
        return view('tutor');
    }

    public function students()
    {
        return view('students');
    }

    public function modules()
    {
        $modules = DB::select('select * from courses');
        return view('modules', compact('modules'));
    }
    public function announcements()
    {
        $announcements = DB::select('select * from announcements');
        return view('announcements', compact('announcements'));
      
    }
    public function home_courses()
    {
        return view('home_courses');
    }
    public function assignments()
    {
        $assignments = DB::select('select * from assignments');
        return view('assignments',compact('assignments'));
    }
    public function coursemodules()
    {   
    }
}
