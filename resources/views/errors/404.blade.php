@extends('layouts.layout', ['title' => "404"])

@section('content')
    <div class="card">
        <h2 class="card-header">You come in a wrong area, brother!</h2>
        <img src="{{ asset('img/pigeon.jpg') }}"  alt="Pigeon">
    </div>

    <a href="/" class="btn btn-outline-success">Return back</a>
@endsection
