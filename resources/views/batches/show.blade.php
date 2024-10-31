@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show batches Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">batches Name: <span class="text-secondary">{{ $batches->name }}</span></h4>
        <p class="text-info">Course ID: <span class="text-secondary">{{ $batches->course_id }}</span></p>
        <p class="text-info">Start Date: <span class="text-secondary">{{ $batches->start_date }}</span></p>
    </div>
</div>
@endsection