@extends('blogs.layout.app')
@section('content')

<form action="/blogs/{{ $blog->id }}" method="POST">

    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $blog->title }}"/>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" rows="10" class="form-control">{{ $blog->content }}</textarea>
    </div>
    <div class="text-center">
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Edit blog post</button>
        </div>

    </div>
</form>
@endsection