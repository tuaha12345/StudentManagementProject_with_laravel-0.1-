@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show course Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">course Name: <span class="text-secondary">{{ $course->name }}</span></h4>
        <p class="text-info">course syllabus: <span class="text-secondary">{{ $course->syllabus }}</span></p>
        <p class="text-info">course duratoin: <span class="text-secondary">{{ $course->duration }}</span></p>
    </div>
</div>
@endsection