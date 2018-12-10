@extends('master')
@section('content')

<div class="container main-container headerOffset">
    @if($contents)
    @foreach($contents as $content)
    <div class="row innerPage">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row userInfo">
                <h1 class="title-big text-center section-title-style2">
                    <span> {{$content['title']}} </span>
                </h1>
                <p class="lead text-center">{{$content['article']}}</p>
            </div>
            <!--/row end-->
        </div>
    </div>
    <!--/.innerPage-->
    @endforeach
    @else
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <p class="lead text-center"><i>No contents for this menu link</i></p>
        </div>
        <!--/row end-->
    </div>
    @endif
    <div style="clear:both"></div>
</div>
<!-- /.main-container -->
<div class="gap"></div>
@endsection