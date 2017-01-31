@extends('index')
@section('content')

        <!-- Fixed navbar -->
@include('includes/navbar')


        <!-- *****************************************************************************************************************
 CONTACT FORMS
 ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Новости</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->
<div class="container mtb">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            @foreach($news as $n)
                <div class="news-post">
                    <h2 class="news-post-title">{{ $n->title }}</h2>
                    <p class="news-post-meta">{{ $n->updated_at }}</p>

                    <img src="/img/news/{{ $n->image }}">
                    {!! $n->description !!}
                </div><!-- /.news-post -->
            @endforeach
            @include('includes.news_pagination')
        </div>
        @include('includes.news_tags')
    </div>
</div>
@stop
