<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
    public function report($pid_id)
    {
        $payments=DB::table('payments')->select('payments.*')->where('payments.id',$pid_id)->get();
        $pdf=App::make('dompdf.wrapper');
        $print="<div style='margin:20px;' padding:20px;'>";
        $print.="<h2>Payment Report</h2>";
        $print.="<table style='border:1px solid #000; border-collapse:collapse; width:100%;'>";
        $print.="<tr>";
        $print.="<th style='border:1px solid #000; padding:10px;'>Enrollment ID</th>";
        $print.="<th style='border:1px solid #000; padding:10px;'>Paid Date</th>";
        $print.="<th style='border:1px solid #000; padding:10px;'>Amount</th>";
        $print.="</tr>";
        foreach($payments as $payment){
            $print.="<tr>";
            $print.="<td style='border:1px solid #000; padding:10px;'>".$payment->enrollment_id."</td>";
            $print.="<td style='border:1px solid #000; padding:10px;'>".$payment->paid_date."</td>";
            $print.="<td style='border:1px solid #000; padding:10px;'>".$payment->amount."</td>";
            $print.="</tr>";
        }
        $print.="</table>";
        $print.="</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();  
    }

}