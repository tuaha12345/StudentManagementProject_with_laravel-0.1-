@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Edit Batch {{ $batches->name }} </h3><hr>
    <div class="container ">
        <form action="{{ route('batches.update',$batches->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $batches->name }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Course Id</label>
                <input type="text" class="form-control" id="address" name="course_id" value="{{ $batches->course_id }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Duration</label>
                <input type="date" class="form-control" id="phone" name="start_date" value="{{ $batches->start_date }}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection