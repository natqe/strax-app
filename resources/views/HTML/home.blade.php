@extends('master')

@section('css_content')
<link href="{{ asset('assets/css/home-v7.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="banner">
    <div class="full-container">
        <div class="slider-content">
            <ul id="pager2" class="container">
            </ul>
            <!-- prev/next links -->
            <span class="prevControl sliderControl"><i class="fa fa-angle-left fa-3x"></i></span>
            <span class="nextControl sliderControl"><i class="fa fa-angle-right fa-3x"></i></span>
            <div class="slider slider-v1" data-cycle-swipe=true data-cycle-prev=".prevControl" data-cycle-next=".nextControl" data-cycle-loader="wait">
                <div class="slider-item slider-item-img1">
                    <img src="{{ asset('images/slider/slider00.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img">
                </div>
                <div class="slider-item slider-item-img1">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull ">
                                <div class="inner text-center">
                                    <div class="topAnima animated">
                                        <h1 class="uppercase xlarge">FREE SHIPPING</h1>
                                        <h3 class="hidden-xs"> Free Standard Shipping on Orders Over $100 </h3>
                                    </div>
                                        <a class="btn btn-danger btn-lg bottomAnima animated opacity0">
                                            SHOP NOW ON STRAX
                                            <span class="arrowUnicode">►</span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/slider/slider11.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->
                <div class="slider-item slider-item-img2 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull  ">
                                <div class="inner dark maxwidth500 text-center animated topAnima">
                                    <div class=" ">
                                        <h1 class="uppercase xlarge"> MUSICAL INSTRUMENT COLLECTION</h1>
                                        <h3 class="hidden-xs"> Select a custom one </h3>
                                    </div>
                                    <a class="btn btn-danger btn-lg">SHOP NOW ON STRAX <span class="arrowUnicode">►</span></a></div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/slider/slider33.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->
                <div class="slider-item slider-item-img3 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs">
                                <div class="inner">
                                    <h1>STRAX MUSIC</h1>
                                    <h3 class="price "> Free Shipping on $100</h3>
                                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                        volutpat. </p>
                                    <a href="{{ url('category') }}" class="btn btn-primary">SHOP NOW <span class="arrowUnicode">►</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/slider/slider44.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img"></div>
                <!--/.slider-item-->
                <div class="slider-item slider-item-img3">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5 pull-left sliderText blankstyle transformRight">
                                <div class="inner text-right"><img src="{{ asset('images/slider/color1.png') }}" class="img-responsive" alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-7   pull-left sliderText blankstyle color-white">
                                <div class="inner">
                                    <h1 class="uppercase topAnima animated ">10,000+ Fine Musical Instruments</h1>

                                    <p class="bot tomAnima animated opacity0 hidden-xs"> 10,000+ musical instruments and over 200 types.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/slider/66.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img"></div>
            </div>
            <!--/.slider slider-v1-->
        </div>
        <!--/.slider-content-->
    </div>
    <!--/.full-container-->
</div>
<!--/.banner style1-->
@if($products)
<div class="container main-container">
    <!-- Main component call to action -->
    <br><br><br><br><br>
    <div class="row">
        <div class="col-sm-10 show-case-wrapper center-block relative">
            <div id="productShowCase" class="">
                @foreach($products as $product)
                @foreach($categories as $category)
                @if($category['id']==$product['categorie_id'])
                <div class="product-slide">
                    <div class="col-sm-5 product-slide-left">
                        <a class="product-slide-img">
                            <img alt="img"src="{{ asset('images/product/'. $product['image']) }}"class="img-responsive">
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-slide-inner ">
                            <h1 class="product-title">{{$product['title']}}</h1>

                            <h3 class="product-code">Product Code : DEN{{$product['id']}}</h3>

                            <div class="product-price"><span class="price-sales">${{$product['price']}}</span>
                                <span class="price-standard">${{$product['price']+($product['price']*0.3)}}</span></div>
                            <div class="details-description">
                                <p>{!! $product['description_list'] !!}</p>
                            </div>
                            @if(Cart::get($product['id']))
                            <a disabled='disabled' title="Add to Cart" data-id="{{$product['id']}}"class="btn btn-stroke-dark">
                                <i class="glyphicon glyphicon-shopping-cart"></i>In cart</a>
                            @else
                            <a title="Add to Cart" data-id="{{$product['id']}}"class="btn btn-stroke-dark add-to-cart">
                                <i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart</a>
                            @endif
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>
            <!--/#productShowCase -->
            <div style="clear:both;"></div>
            <a id="ps-next" class="ps-nav"> <i class="fa fa-angle-right"></i> </a>
            <a id="ps-prev" class="ps-nav"> <i class="fa fa-angle-left"></i> </a>
        </div>
        <!--/.show-case-wrapper -->
    </div>
    <!-- Main component call to action -->
    <div class="row featuredPostContainer globalPadding style2 padding-top-0">
        <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>
        <div id="productslider" class="owl-carousel owl-theme">
            @foreach($products as $product)
            @foreach($categories as $category)
            @if($category['id']==$product['categorie_id'])
            <div class="item">
                <div class="product">
                    <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                       data-placement="left">
                        <i class="glyphicon glyphicon-heart"></i>
                    </a>
                    <div class="image">
                        <a href="{{url($category['url'].'/'. $product['url']) }}">
                            <img src="{{ asset('images/product/'. $product['image']) }}" alt="img" class="img-responsive">
                        </a>
                        <div class="promotion">
                            @if($product['discount'])
                            <span class="discount">{!! $product['discount'] !!} OFF</span>
                            @endif
                        </div>
                    </div>
                    <div class="description">
                        <h4><a href="{{ url($category['url'].'/'. $product['url']) }}">{{$product['title']}}</a></h4>
                        <p>{!! $product['description_grid'] !!} </p>
                    </div>
                    <div class="price"><span>${{ $product['price'] }}</span></div>
                    <div class="action-control">
                        @if(Cart::get($product['id']))
                        <a disabled='disabled' class="btn btn-primary btn-lg">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <span class="add2cart">
                                In cart
                            </span>
                        </a>
                        @else
                        <a data-id="{{$product['id']}}" class="btn btn-primary btn-lg add-to-cart">
                            <span class="add2cart">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Add to cart
                            </span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>
        <!--/.productslider-->
    </div>
    <!--/.featuredPostContainer-->
</div>
<!-- /main container -->
@endif
<div class="parallax-section parallax-image-1">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="parallax-content clearfix">
                    <h1 class="parallaxPrce"> $200 </h1>
                    <h2 class="uppercase">FREE INTERNATIONAL SHIPPING! Get Free Shipping Coupons</h2>
                    <h3> Energistically develop parallel mindshare rather than premier deliverables. </h3>
                    <div style="clear:both"></div>
                    <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> SHOP NOW </a></div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.parallax-image-1-->
<div class="container">
    <!-- Main component call to action -->
        <hr class="no-margin-top">
        <section class="section-hero" id="section-category">
            <div class="hero-section-header ">
                <h3 class="hero-section-title">OUR FAVORITE CATEGORY</h3>
            </div> 
            <div class="row row-centered"> 
            @foreach($categories as $category)
                <div class="block-explore col-centered col-sm-4 col-xs-4 col-xs-min-12">
                    <div class="inner">
                        <a class="overly hw100" href="{{ url($category['url']) }}">
                            <span class="explore-title">{{ $category['title'] }}</span>
                        </a>
                        <a href="{{ url($category['url']) }}" class="img-block"> <img alt="img" src="{{ asset('images/look3/' . $category['image']) }}" class="img-responsive"></a>
                    </div>
                </div>
             @endforeach
            </div>
        </section>
    <!--/.section-block-->
    <div class="width100 section-block">
        <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i
                    class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i
                    class="fa fa-angle-left"></i> </a></h3>
        <div class="row">
            <div class="col-lg-12">
                <ul class="no-margin brand-carousel owl-carousel owl-theme">
                    <li><a><img src="{{ asset('images/brand/1.gif') }}" alt="img"></a></li>
                    <li><img src="{{ asset('images/brand/2.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/3.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/4.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/5.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/6.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/7.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/8.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/1.gif') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/2.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/3.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/4.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/5.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/6.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/7.png') }}" alt="img"></li>
                    <li><img src="{{ asset('images/brand/8.png') }}" alt="img"></li>
                </ul>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.section-block-->
</div>
<!--main-container-->
<div class="parallax-section parallax-image-2">
    <div class="w100 parallax-section-overley">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="parallax-content clearfix">
                        <h1 class="xlarge"> Trusted Seller 500+ </h1>
                        <h5 class="parallaxSubtitle"> Lorem ipsum dolor sit amet consectetuer </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.parallax-section-->
<!-- Product Details Modal  -->
<!-- Modal -->
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
     aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Modal -->
@endsection
