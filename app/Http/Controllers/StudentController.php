<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $post=new Student;
        $posts=$post->all();
        return view('students.index',['students'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->phone=$request->phone;
        $student->save();
        return redirect('/students')->with('flash_message','Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        return view('students.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('students.edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->name=$request->name;
        $student->address=$request->address;
        $student->phone=$request->phone;
        $student->save();
        return redirect('/students')->with('flash_message','Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/students')->with('flash_message','Student deleted successfully.');
    }
}
