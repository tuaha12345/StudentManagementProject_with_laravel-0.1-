@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-success ">course Application</h3><hr>
    <div class="container ">
        <a class="btn btn-success my-3" href="{{route('courses.create')}}">Add New</a>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">syllabus</th>
                <th scope="col">Duration</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($courses as $s)

              <tr>
                <th scope="row">{{ $s->id }}</th>
                <td>{{ $s->name}}</td>
                <td>{{ $s->syllabus }}</td>
                <td>{{ $s->duration }}</td>
                <td>
                    <a href="{{ route('courses.edit',$s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('courses.show',$s->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('courses.destroy',$s->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>

               @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
