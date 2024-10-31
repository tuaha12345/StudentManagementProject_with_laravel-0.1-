@extends('layout')

@section('content')

<div class="container">
    <h3 class="text-center text-success ">Edit payment {{ $payments->id }} </h3><hr>
    <div class="container ">
        <form action="{{ route('payments.update',$payments->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="enrollment_no">
                    <option selected>Enrollment ID</option>
                    @foreach ($enrollments as $e)
                    <option value="{{ $e }}">{{ $e }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Paid Date</label>
                <input type="date" class="form-control" id="address" name="paid_date">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Amount</label>
                <input type="text" class="form-control" id="duration" name="amount">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection