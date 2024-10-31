<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $post=new Teacher;
        $posts=$post->all();
        return view('teachers.index',['teachers'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Teacher=new Teacher();
        $Teacher->name=$request->name;
        $Teacher->address=$request->address;
        $Teacher->phone=$request->phone;
        $Teacher->save();
        return redirect('/teachers')->with('flash_message','Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher=Teacher::find($id);
        return view('teachers.show',['teacher'=>$teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Teacher::find($id);
        return view('teachers.edit',['teacher'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Teacher=Teacher::find($id);
        $Teacher->name=$request->name;
        $Teacher->address=$request->address;
        $Teacher->phone=$request->phone;
        $Teacher->save();
        return redirect('/teachers')->with('flash_message','Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Teacher=Teacher::find($id);
        $Teacher->delete();
        return redirect('/teachers')->with('flash_message','Teacher deleted successfully.');
    }
}
