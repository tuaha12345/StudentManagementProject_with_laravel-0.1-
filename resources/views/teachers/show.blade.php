@extends('layout')

@section('content')
<div class="container">
    <h3 class="text-center text-info ">Show teacher Details</h3><hr class="text-info">
    <div class="container ">
        <h4 class="text-info">teacher Name: <span class="text-secondary">{{ $teacher->name }}</span></h4>
        <p class="text-info">teacher Address: <span class="text-secondary">{{ $teacher->address }}</span></p>
        <p class="text-info">teacher Phone: <span class="text-secondary">{{ $teacher->phone }}</span></p>
    </div>
</div>
@endsection