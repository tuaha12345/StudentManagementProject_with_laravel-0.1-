@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Create A New batch</h3><hr>
    <div class="container ">
        <form action="{{ route('batches.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Batch Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="course_id">
                    <option selected>Course</option>
                    @foreach ($course as $key=>$c)
                    <option value="{{ $key }}">{{ $c }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="duration" name="start_date">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection