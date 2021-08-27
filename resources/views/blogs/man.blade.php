@extends('blogs.layout.app')
@section('content')
<br>
<br>
<div class="row">
    @foreach ($blogs as $blog)
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
               <a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a> 
            </div>
            <div class="card-body">
                <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
                <br>
                <br>
                

                <a href="/blogs/{{ $blog->id }}" class="btn btn-outline-primary">View post</a>
            </div>
        </div>
        
    </div>
@endforeach

</div>
<br>
<br>

    
 @endsection   