@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-warning ">Payment Application</h3><hr>
    <div class="container ">
        <a class="btn btn-success my-3" href="{{route('payments.create')}}">Add New</a>
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Enrollment No</th>
                <th scope="col">Paid Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payments as $s)

              <tr>
                <th scope="row">{{ $s->id }}</th>
                <td>{{ $s->enrollment_id}}</td>
                <td>{{ $s->paid_date }}</td>
                <td>{{ $s->amount}}</td>
                <td>
                    <a href="{{ route('payments.edit',$s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('payments.show',$s->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route('payments.destroy',$s->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('report',$s->id) }}" class="btn btn-info">Print</a>
                </td>
              </tr>

               @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection
