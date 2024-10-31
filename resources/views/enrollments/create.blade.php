@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Create A New Entrollment</h3><hr>
    <div class="container ">
        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Enrollments No</label>
                <input type="text" class="form-control" id="name" name="enrollment_no">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Batch ID</label>
                <select class="form-select" aria-label="Default select example" name="batch_id">
                    @foreach ($batches as $b)
                    <option value="{{ $b->id }}">{{ $b->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <select class="form-select" aria-label="Default select example" name="student_id" >
                    @foreach ($students as $s)
                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Join Date</label>
                <input type="date" name="join_date" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Fee</label>
                <input type="text" class="form-control" id="duration" name="fee">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection