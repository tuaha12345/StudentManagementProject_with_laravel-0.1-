@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show payment Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">payment Name: <span class="text-secondary">{{ $payments->enrollment_id }}</span></h4>
        <p class="text-info">payment syllabus: <span class="text-secondary">{{ $payments->paid_date }}</span></p>
        <p class="text-info">payment duratoin: <span class="text-secondary">{{ $payments->amount }}</span></p>
    </div>
</div>
@endsection