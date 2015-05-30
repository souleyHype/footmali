@extends('admin')

@section('content')

<div class="col-lg-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Articles</h2>
            <div class="actions panel_actions pull-right">
                <i class="box_toggle fa fa-chevron-down"></i>
                <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            </div>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td><a href="{{ action('ArticleController@edit', $article->id) }}">{{ $article->title}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</div>


@stop
