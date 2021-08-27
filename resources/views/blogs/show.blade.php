@extends('blogs.layout.app')
@section('content')
<div class="row">
    <br>
    <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
    <br>
    <br>
    <div class="col-md-12">
        <br>
        <h3>{{ $blog->title }}</h3>
        <p class="lead">
            {{ $blog->content }}
        </p>
        
    </div>
    <a href="/blogs/edit/{{ $blog->id }}" class="btn btn-outline-info">Edit</a>
    <a href="/blogs" class="btn btn-outline-secondary">Back</a>
    <form action="/blogs/{{ $blog->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
</div>





@endsection