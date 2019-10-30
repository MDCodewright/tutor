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
    public function tutorcourses()
    {
        $assignments = DB::select('select * from assignments');
        $announcements = DB::select('select * from announcements');
        return view('tutorcourses', compact('assignments','announcements'));
      
    }
}
