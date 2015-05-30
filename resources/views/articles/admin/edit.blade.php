@extends('admin')

@section('content')
<div class="col-lg-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">{{ Lang::get('admin.edit_article') }}</h2>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}
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
                        {!! Form::textarea('body', null, ['class' => 'form-control, bootstrap-wysihtml5-textarea', 'style' => 'width: 100%; height: 250px;'])  !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('summary', 'Summary') !!}
                        {!! Form::textarea('summary', null, ['class' => 'form-control'])  !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create',  ['class' => 'btn btn-primary'])  !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
</div>

@stop
