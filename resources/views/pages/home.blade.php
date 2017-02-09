@extends('index')
@section('content')

<!-- Fixed navbar -->
@include('includes/navbar')

<!-- *****************************************************************************************************************
 HEADERWRAP
 ***************************************************************************************************************** -->
<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>{{ $data['slogan'] }}</h3>
                <h1>{{ $data['title'] }}</h1>
                <h5>{{ $data['sub_title'] }}</h5>
            </div>
            <div class="col-lg-8 col-lg-offset-2 himg">
                <img src="/img/static/{{ $data['image'] }}" class="img-responsive">
            </div>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /headerwrap -->

<!-- *****************************************************************************************************************
 SERVICE LOGOS
 ***************************************************************************************************************** -->
<div id="service">
    <div class="container">
        <div class="row centered">
            <div class="col-md-4">
                <i class="fa fa-heart-o"></i>
                <h4>{{ $data['sub_title_left'] }}</h4>
                <p>{{ $data['sub_description_left'] }}</p>
                {{--<p><br/><a href="#" class="btn btn-theme">More Info</a></p>--}}
            </div>
            <div class="col-md-4">
                <i class="fa fa-flask"></i>
                <h4>{{ $data['sub_title_center'] }}</h4>
                <p>{{ $data['sub_description_center'] }}</p>
                {{--<p><br/><a href="#" class="btn btn-theme">More Info</a></p>--}}
            </div>
            <div class="col-md-4">
                <i class="fa fa-trophy"></i>
                <h4>{{ $data['sub_title_right'] }}</h4>
                <p>{{ $data['sub_description_right'] }}</p>
                {{--<p><br/><a href="#" class="btn btn-theme">More Info</a></p>--}}
            </div>
        </div>
    </div><! --/container -->
</div><! --/service -->

<!-- *****************************************************************************************************************
 TESTIMONIALS
 ***************************************************************************************************************** -->
<div id="twrap">
    <div class="container centered">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <i class="fa fa-comment-o"></i>
                <p>{{ $data['sub_slogan'] }}</p>
                <h4><br/>{{ $data['sub_slogan_author'] }}</h4>
            </div>
        </div><! --/row -->
    </div><! --/container -->
</div><! --/twrap -->
@stop
