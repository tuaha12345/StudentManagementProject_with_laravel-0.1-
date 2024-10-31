@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-success ">Entrollment Application</h3><hr>
    <div class="container ">
        <a class="btn btn-success my-3" href="{{route('enrollments.create')}}">Add New</a>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Enrollment N0</th>
                <th scope="col">Batch</th>
                <th scope="col">Student</th>
                <th scope="col">Fee</th>
                <th scope="col">Join Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $s)

              <tr>
                <th scope="row">{{ $s->id }}</th>
                <td>{{ $s->enroll_no}}</td>
                <td>{{ $s->batch_name}}</td>
                <td>{{ $s->student_name}}</td>
                <td>{{ $s->fee}}</td>
                <td>{{ $s->join_date}}</td>
                <td>
                    <a href="{{ route('enrollments.edit',$s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('enrollments.show',$s->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('enrollments.destroy',$s->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>

               @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
