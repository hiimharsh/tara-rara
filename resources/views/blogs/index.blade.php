@extends('layouts.master')

@section('content')

  <div class="row">
    @foreach($blogs as $blog)
      <div class="col-md-4 default-blog-height">
        <h3><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a></h3>
        <h5>{{ $blog->body }}</h5>
      </div>
    @endforeach
  </div>
  
@endsection