
@extends('layouts.main')

@section('container')
    <h1>Categories<h1>
    
        <div class="container mt-4">
            <div class="row">
                @foreach ($categories as $cate)                    
                    <div class="col-md-4">
                        <a href="/posts?category={{ $cate->slug }}">
                            <div class="card bg-dark text-white">
                                <img src="http://source.unsplash.com/700x500?{{ $cate->name }}" alt="{{ $cate->name }}" class="card-img" alt="{{ $cate->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $cate->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
