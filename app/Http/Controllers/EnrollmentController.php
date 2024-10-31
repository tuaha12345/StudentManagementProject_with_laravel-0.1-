<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $enrollments=DB::table('enrollments')->join('batches', 'enrollments.batch_id', '=', 'batches.id')
       ->join('students', 'enrollments.student_id', '=', 'students.id')
       ->select('enrollments.*','batches.name as batch_name','students.name as student_name')->get();
       return view('enrollments.index',['enrollments'=>$enrollments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
       $batches=DB::table('batches')->get();
       $students=DB::table('students')->get();
       return view('enrollments.create',['batches'=>$batches,'students'=>$students]);
       //return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'enrollment_no' => 'required',
            'batch_id' => 'required',
            'student_id' => 'required',
            'join_date' => 'required|date',
            'fee' => 'required|numeric',
        ]);
    
        // If validation passes, proceed with saving
        $input = new Enrollment();
        $input->enroll_no = $request->enrollment_no;
        $input->batch_id = $request->batch_id;
        $input->student_id = $request->student_id;
        $input->join_date = $request->join_date;
        $input->fee = $request->fee;
        $input->save();
    
        return redirect('/enrollments')->with('flash_message', 'Enrollment created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrolment=Enrollment::find($id);
        return view('enrollments.show',['enrollments'=>$enrolment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment=Enrollment::find($id);
        return view('enrollments.edit',['enrollment'=>$enrollment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input=Enrollment::find($id);
        $input->enroll_no=$request->enrollment_no;
        $input->batch_id=$request->batch_id;
        $input->student_id=$request->student_id;
        $input->join_date=$request->join_date;
        $input->fee=$request->fee;
        $input->save();
        return redirect('/enrollments')->with('flash_message','Enrollment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('/enrollments')->with('flash_message','Enrollment deleted successfully.');
    }
}
