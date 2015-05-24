@extends('app')

@section('content')
	<h1>Add New Article</h1>
	
	{!! Form::open(['action' => 'ArticleController@store']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title') !!}	
			{!! Form::text('title', null, ['class' => 'form-control']) !!} 
		</div>

		<div class="form-group">
			{!! Form::label('lead', 'Lead') !!}
			{!! Form::textarea('lead', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Body') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control'])  !!}
		</div>

		<div class="form-group">
			{!! Form::label('summary', 'Summary') !!}
			{!! Form::textarea('summary', null, ['class' => 'form-control'])  !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Create',  ['class' => 'btn btn-default'])  !!}
		</div>
	{!! Form::close() !!}
@stop
