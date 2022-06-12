@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="image/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">
@endsection
