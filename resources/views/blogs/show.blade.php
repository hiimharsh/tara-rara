@extends('layouts.master')

@section('content')

    <h3>{{ $blog->title }}</h3>
    <h5>{{ $blog->body }}</h5>

    <a href="{{ $blog->id }}/edit" style="color:white;"><button class="btn btn-primary">Edit Blog</button></a>
  
@endsection