@extends('layouts.master')



@section('content')

  <h1>Edit: {{ $blog->title }}</h1>

  {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogsController@update', $blog->id]]) !!}

    <div class="col-md-6">

      @include('errors.formerrors')

      @include('partials.blogform', ['submitButton' => 'Update Blog'])

      {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
        {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}

    </div>

  {!! Form::close() !!}


@endsection