@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Edit course {{ $course->name }} </h3><hr>
    <div class="container ">
        <form action="{{ route('courses.update',$course->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">syllabus</label>
                <input type="text" class="form-control" id="address" name="syllabus" value="{{ $course->syllabus }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Duration</label>
                <input type="text" class="form-control" id="phone" name="duration" value="{{ $course->duration }}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection