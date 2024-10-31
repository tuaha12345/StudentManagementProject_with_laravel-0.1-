@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-success ">teacher Application</h3><hr>
    <div class="container ">
        <a class="btn btn-success my-3" href="{{route('teachers.create')}}">Add New</a>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $s)

              <tr>
                <th scope="row">{{ $s->id }}</th>
                <td>{{ $s->name}}</td>
                <td>{{ $s->address }}</td>
                <td>{{ $s->phone }}</td>
                <td>
                    <a href="{{ route('teachers.edit',$s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('teachers.show',$s->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('teachers.destroy',$s->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>

               @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
