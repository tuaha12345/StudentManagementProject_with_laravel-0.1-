@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show Student Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">Student Name: <span class="text-secondary">{{ $student->name }}</span></h4>
        <p class="text-info">Student Address: <span class="text-secondary">{{ $student->address }}</span></p>
        <p class="text-info">Student Phone: <span class="text-secondary">{{ $student->phone }}</span></p>
    </div>
</div>
@endsection