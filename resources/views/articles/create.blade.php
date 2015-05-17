@extends('app')

@section('content')
	<h1>Add New Article</h1>
	
	{!! Form::open() !!}
		<div class="form-group">
			{!! Form::label('title', 'Title') !!}	
			{!! Form::text('title', null, ['class' => 'form-control']) !!} 
		</div>
	{!! Form::close() !!}
@stop
