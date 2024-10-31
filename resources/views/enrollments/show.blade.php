@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show Enrollments Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">Enrollments No: <span class="text-secondary">{{ $enrollments->enroll_no }}</span></h4>
        <p class="text-info">Batch ID: <span class="text-secondary">{{ $enrollments->batch_id }}</span></p>
        <p class="text-info">Student ID: <span class="text-secondary">{{ $enrollments->student_id }}</span></p>
        <p class="text-info">Join Date: <span class="text-secondary">{{ $enrollments->join_date}}</span></p>
        <p class="text-info">Fee: <span class="text-secondary">{{ $enrollments->fee}}</span></p>
    </div>
</div>
@endsection