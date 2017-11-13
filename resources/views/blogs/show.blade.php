@extends('layouts.master')

@section('content')

    <h3>{{ $blog->title }}</h3>
    <h5>{{ $blog->body }}</h5>
  
@endsection