<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    
    public function index()
    {   
        $post=new Batch;
        $posts=$post->all();
        $batches=DB::table('batches')->join('courses', 'batches.course_id', '=', 'courses.id')->select('batches.*','courses.name as course_name')->get();
        return view('batches.index',['batches'=>$batches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $course=DB::table('courses')->pluck('name','id');
        return view('batches.create',['course'=>$course]);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        $batches=new Batch();
        $batches->name=$request->name;
        $batches->course_id=$request->course_id;
        $batches->start_date=$request->start_date;
        $batches->save();
        return redirect('/batches')->with('flash_message','batches created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(string $id)
    {
        $batches=Batch::find($id);
        return view('batches.show',['batches'=>$batches]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $batches=Batch::find($id);
        return view('batches.edit',['batches'=>$batches]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $batches=Batch::find($id);
        $batches->name=$request->name;
        $batches->course_id=$request->course_id;
        $batches->start_date=$request->start_date;
        $batches->save();
        return redirect('/batches')->with('flash_message','batches updated successfully.');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $batches=Batch::find($id);
        $batches->delete();
        return redirect('/batches')->with('flash_message','batches deleted successfully.');
    }
}
