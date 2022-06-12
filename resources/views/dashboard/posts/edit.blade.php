@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-body-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>                
</div>

<div class="col-lg-8">
<form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title', $post->title) }}">      
      @error('title')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">      
      @error('slug')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="hidden" name="oldImage" value="{{ $post->image }}">
      <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if (old('category_id', $category->id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                              
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>                              
            @endif
          @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        @if ($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input id="content" type="hidden" name="content" value="{{ old('content', $post->content) }}">
        <trix-editor input="content"></trix-editor>
        @error('content')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save Change</button>
</form>
</div>

{{-- auto slug --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    // trix 
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    // image preview
    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }
</script>
    
@endsection