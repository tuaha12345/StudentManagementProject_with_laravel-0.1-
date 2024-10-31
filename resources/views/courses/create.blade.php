@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Create A New Course</h3><hr>
    <div class="container ">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">syllabus</label>
                <input type="text" class="form-control" id="address" name="syllabus">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection