<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {   
        $post=new Course;
        $posts=$post->all();
        return view('courses.index',['courses'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        $course=new Course();
        $course->name=$request->name;
        $course->syllabus=$request->syllabus;
        $course->duration=$request->duration;
        $course->save();
        return redirect('/courses')->with('flash_message','Course created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(string $id)
    {
        $course=Course::find($id);
        return view('courses.show',['course'=>$course]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $course=course::find($id);
        return view('courses.edit',['course'=>$course]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $course=course::find($id);
        $course->name=$request->name;
        $course->syllabus=$request->syllabus;
        $course->duration=$request->duration;
        $course->save();
        return redirect('/courses')->with('flash_message','course updated successfully.');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $course=course::find($id);
        $course->delete();
        return redirect('/courses')->with('flash_message','course deleted successfully.');
    }
}
