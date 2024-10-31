    @extends('layout')

    @section('content')
    
    <div class="container">
        <h3 class="text-center text-success ">Create A New Entrollment</h3><hr>
        <div class="container ">
            <form action="{{ route('enrollments.update',$enrollment->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Enrollments No</label>
                    <input type="text" class="form-control" id="name" name="enrollment_no" value="{{ $enrollment->enroll_no}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Batch ID</label>
                    <input type="text" class="form-control" id="name" name="batch_id" value="{{ $enrollment->batch_id }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="name" name="student_id" value="{{ $enrollment->student_id }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Join Date</label>
                    <input type="date" class="form-control" id="address" name="join_date" value="{{ $enrollment->join_date }}">
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Fee</label>
                    <input type="text" class="form-control" id="duration" name="fee" value="{{ $enrollment->fee }}">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>    
    @endsection