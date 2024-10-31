@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Edit teacher {{ $teacher->name }} </h3><hr>
    <div class="container ">
        <form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $teacher->address }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $teacher->phone }}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection