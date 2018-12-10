@extends('master') 
@section('content')
<div class="container main-container headerOffset globalPaddingBottom">
    <BR> 
    @if($categories)
    <h1 class="title-big text-center">
        <span> SHOP CATEGORIES </span>
    </h1>
    <p class="lead text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus
        eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu
        ad litora torquent per conubia nostra, per inceptos himenaeos.
    </p>
    <div style="clear:both"></div>
    <div class="row">
        <div class="col-lg-12">
            <hr class="hr3">
        </div>
    </div>
    <div class="row featuredPostContainer ">
        <div class="featuredImageLook3">
            @foreach($categories as $category)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-min-12">
                <div class="inner">
                    <div class="box-content-overly box-content-overly-white">
                        <div class="box-text-table">
                            <div class="box-text-cell ">
                                <div class="box-text-cell-inner dark">
                                    <h1 class="uppercase">{{ $category['title'] }}</h1>

                                    <p>{!! $category['article'] !!}</p>
                                    <hr class="submini">
                                    <a href="{{ url($category['url']) }}" class="btn btn-inverse"> SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.box-content-overly -->
                    <div class="img-title"> {{ $category['title'] }}</div>
                    <a class="img-block" href="#">
                        <img class="img-responsive" src="{{ asset('images/look3/' . $category['image']) }}" alt="img">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <!--/.featuredImageLook3-->
    </div>
    <!--/.featuredPostContainer-->
    @else
    <h1 class="title-big text-center">
        <p>
            <i>No categories found...</i>
        </p>
    </h1>
    @endif
</div>
<!-- /main container -->
@endsection