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
                <p class="lead">
                    {{ $blog->created_at->diffForHumans() }}
                </p>

                <a href="/blogs/{{ $blog->id }}" class="btn btn-outline-primary">View post</a>
            </div>
        </div>
        
    </div>
@endforeach

</div>
<br>
<br>
<span>
    {{ $blogs->links() }}
</span>
<style>
    .w-5{
        display:none;
    }
    span.relative.z-0.inline-flex.shadow-sm.rounded-md {
    display: none;
}
</style>
    
 @endsection   