<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $post=new Payment;
        $posts=$post->all();
        return view('payments.index',['payments'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $enrollments=DB::table('enrollments')->pluck('enroll_no');
        return view('payments.create',['enrollments'=>$enrollments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment=new Payment;
        $payment->enrollment_id=$request->enrollment_no;
        $payment->paid_date=$request->paid_date;
        $payment->amount=$request->amount;
        $payment->save();
        return redirect('/payments')->with('flash_message','payment created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment=Payment::find($id);
        return view('payments.show',['payments'=>$payment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $payment=Payment::find($id);
        $enrollments=DB::table('enrollments')->pluck('enroll_no');
        return view('payments.edit',['payments'=>$payment,'enrollments'=>$enrollments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment=Payment::find($id);
        $payment->enrollment_id=$request->enrollment_no;
        $payment->paid_date=$request->paid_date;
        $payment->amount=$request->amount;
        $payment->save();
        return redirect('/payments')->with('flash_message','payment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment=Payment::find($id);
        $payment->delete();
        return redirect('/payments')->with('flash_message','payment deleted successfully.');
    }
}
