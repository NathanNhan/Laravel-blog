@extends('blogs.layout.app')
@section('content')

<form action="{{ route('store_blog_path') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
       <label for="title">Type</label>
        <input type="text" name="type" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="file" class="form-control"/>
    </div>
    <div class="text-center">
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Add blog post</button>
        </div>

    </div>
</form>
@endsection