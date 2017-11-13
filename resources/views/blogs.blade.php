@extends('layouts.master')

@section('content')

  @foreach($blogs as $blog)
    <h3><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a></h3>
    <h5>{{ $blog->body }}</h5>
  @endforeach
  
@endsection