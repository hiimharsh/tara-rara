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

      @if($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      <div class="form-group">
        {!! Form::label('title', 'Blog Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('body', 'Blog Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Add blog', ['class' => 'btn btn-primary']) !!}
      </div>
    </div>

  {!! Form::close() !!}


@endsection