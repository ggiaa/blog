@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $webtitle }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">                
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">                
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn" style="background-color: #e3f2fd;" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($article->count())
        <div class="card mb-3">
            @if ($article[0]->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $article[0]->image) }}" alt="{{ $article[0]->category->name }}" class="img-fluid mt-3">
            </div>
            @else
            <img src="http://source.unsplash.com/1200x400?{{ $article[0]->category->name }}" alt="{{ $article[0]->category->name }}" class="img-fluid">
            @endif            
            <div class="card-body">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $article[0]->slug }}">{{ $article[0]->title }}</a></h3>
            <small class="text-muted">
                <p>By : <a href="/posts?author={{ $article[0]->author->username }}" class="text-decoration-none">{{ $article[0]->author->name }}</a> / 
                    <a class="text-decoration-none" href="/posts?category={{ $article[0]->category->slug }}">{{ $article[0]->category->name }}</a>
                </p>
            </small>
            <p class="card-text">{{ $article[0]->excerpt }}</p>
            <p class="card-text">
                <small class="text-muted">{{ $article[0]->created_at->diffForHumans() }}</small>
            </p>
            <a class="text-decoration-none" href="/posts/{{ $article[0]->slug }}">Read more</a>
            </div>
        </div>        
    
    <div class="container">
        <div class="row">
            @foreach($article->skip(1) as $artikel)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.4)">
                            <a class="text-decoration-none text-white" href="/posts?category={{ $artikel->category->slug }}">{{ $artikel->category->name }}</a>
                        </div>                        
                        @if ($artikel->image)
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->category->name }}" class="img-fluid mt-3">
                        @else
                        <img src="http://source.unsplash.com/1200x400?{{ $artikel->category->name }}" alt="{{ $artikel->category->name }}" class="img-fluid">
                        @endif
                        <div class="card-body">
                        <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $artikel->slug }}">{{ $artikel->title }}</a></h5>
                        <small class="text-muted">
                            <p>
                                By : <a href="/posts?author={{ $artikel->author->username }}" class="text-decoration-none">{{ $artikel->author->name }}</a> 
                                <small class="text-muted">{{ $artikel->created_at->diffForHumans() }}</small>
                            </p>
                        </small>
                        <p class="card-text">{{ $artikel->excerpt }}</p>
                        <a href="/posts/{{ $artikel->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Yet</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $article->links() }}
    </div>

@endsection 