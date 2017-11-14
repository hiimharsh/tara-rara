@extends('layouts.master')



@section('content')

  <!-- <form action="/blogs" method="POST">
    <div class="col-md-6">
      <div class="form-group">
        <label for="title">Blog Title:</label>
        <input type="text" class="form-control" id="title">
      </div>
      <div class="form-group">
        <label for="body">Blog Body:</label>
        <textarea class="form-control" id="body" maxlength="100" rows="5" cols="12"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form> -->
  <h1>Create blog</h1>

  {!! Form::open(['url' => 'blogs']) !!}

    <div class="col-md-6">

      @include('errors.formerrors')

      @include('partials.blogform', ['submitButton' => 'Add Blog'])
      
    </div>

  {!! Form::close() !!}


@endsection