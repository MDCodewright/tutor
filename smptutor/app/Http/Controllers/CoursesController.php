<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Courses::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'course_name'=>'required',
            'course_code'=>'required'
        ]);

        $courses = new Courses([
            'course_name' => $request->get('course_name'),
            'course_code' => $request->get('course_name')
        ]);
        $courses->save();
        return redirect('/courses')->with('success', 'Content created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $courses = Courses::find($id);
        return view('courses.edit', compact('courses'));      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'course_name'=>'required',
            'course_code'=>'required'
        ]);

        $courses = Courses::find($id);
        $courses->title =  $request->get('course_name');
        $courses->content = $request->get('course_code');
        $courses->save();

        return redirect('/courses')->with('success', 'Content updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $courses = Courses::find($id);
        $courses->delete();

        return redirect('/courses')->with('success', 'Content deleted!');
    }
}
