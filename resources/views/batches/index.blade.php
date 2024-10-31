@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-success ">Batch Application</h3><hr>
    <div class="container ">
        <a class="btn btn-success my-3" href="{{route('batches.create')}}">Add New</a>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Batch Name</th>
                <th scope="col">Course</th>
                <th scope="col">Start Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($batches as $s)

              <tr>
                <th scope="row">{{ $s->id }}</th>
                <td>{{ $s->name}}</td>
                <td>{{ $s->course_name }}</td>
                <td>{{ $s->start_date }}</td>
                <td>
                    <a href="{{ route('batches.edit',$s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('batches.show',$s->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('batches.destroy',$s->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>

               @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
