<div class="form-group">
  {!! Form::label('title', 'Blog Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Blog Body') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
  <a href="{{ url()->previous() }}"><button type="button" class="btn btn-primary">Cancel</button></a>
</div>