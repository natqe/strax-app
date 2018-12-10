<!DOCTYPE html>
<html lang="en" dir='rtl'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png')}}">
        <title>
            STRAX
            @if( ! empty($title) )
            | {{ $title }}
            @endif
        </title>
        <!-- Bootstrap core CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->

        @yield('css_content')

        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/gray-look.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/skin-6.css') }}" rel="stylesheet">

        <!-- My CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Just for debugging purposes. -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

        <!-- include pace script for automatic web page progress bar  -->
        <script>
            paceOptions = {
                elements: true
            };
            var BASE_URL = '{{url('')}}/';
        </script>
        <script src="{{ asset('assets/js/pace.min.js')}}"></script>
    </head>
    <body>
        @include('inc.nav')
        @include('inc.sm')
        @include('inc.errors')
        @yield('content')
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                            <h3> Support </h3>
                            <ul>
                                <li class="supportLi">
                                    <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    <h4><a class="inline" href="callto:+972587650606"> <strong> <i class="fa fa-phone"> </i>
                                                +972-58-765-0606 </strong> </a></h4>
                                    <h4><a class="inline" href="mailto:help@yourweb.com"> <i class="fa fa-envelope-o"> </i>
                                            help@yourweb.com </a></h4>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Shop </h3>
                            <ul>
                                <li><a href="#">
                                        Tops
                                    </a></li>
                                <li><a href="#">
                                        Popular</a></li>
                                <li><a href="#">
                                        STRAX
                                    </a></li>
                                <li><a href="#">Piano
                                    </a></li>
                                <li><a href="#">
                                        Gift Cards
                                    </a></li>

                            </ul>

                        </div>

                        <div style="clear:both" class="hide visible-xs"></div>

                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Information </h3>
                            <ul class="list-unstyled footer-nav">
                                <li><a href="#">Questions?
                                    </a></li>

                                <li><a href="{{ url('order-status') }}"> Order Status
                                    </a></li>
                                <li><a href="#"> Sizing Charts
                                    </a></li>
                                <li><a href="#"> Return Policy </a></li>
                                <li><a href="{{ url('contact') }}">
                                        Contact Us
                                    </a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> My Account </h3>
                            <ul>
                                <li><a href="{{ url('account-1') }}"> My Account </a></li>
                                <li><a href="{{ url('my-address') }}"> My Address </a></li>
                                <li><a href="{{ url('wishlist') }}"> Wish List </a></li>
                                <li><a href="{{ url('order-list') }}"> Order list </a></li>
                                <li><a href="{{ url('order-status') }}"> Order Status </a></li>
                            </ul>
                        </div>

                        <div style="clear:both" class="hide visible-xs"></div>

                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Stay in touch </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsLatterBox text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Subscribe <i
                                                class="fa fa-long-arrow-right"> </i></button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                                <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                                <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                                <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                                <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> &copy; STRAX {{ date('Y') }}. All right reserved. </p>

                    <div class="pull-right paymentMethodImg">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/master_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/visa_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/paypal.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/american_express_card.png') }}" alt="img"> <img
                            height="30" class="pull-right" src="{{ asset('images/site/payment/discover_network_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/google_wallet.png') }}" alt="img">
                    </div>
                </div>
            </div>
            <!--/.footer-bottom-->
        </footer>
        <div class="modal fade hide" id="modalAds" role="dialog">
            <div class="modal-dialog  modal-bg-1">
                <div class="modal-body-content">
                    <a class="close" data-dismiss="modal">×</a>

                    <div class="modal-body">
                        <div class="col-lg-6 col-sm-8 col-xs-8">
                            <h3>enter your <br>email to receive</h3>

                            <p class="discountLg">10% OFF </p>

                            <p>We invite you to subscribe to our newsletter and receive 10% discount.
                            </p>

                            <div class="clearfx">
                                <form id="newsletter" class="newsletter">
                                    <input type="text" id="subscribe" name="s" placeholder="Enter email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                            </div>

                            <p><a href="{{ url('categories') }}" class="link shoplink"> SHOP NOW <i class="fa fa-caret-right"> </i> </a>
                            </p>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        @if( ! Session::has('user_id'))
        <!-- Modal Login start -->
        <div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                        <h3 class="modal-title-site text-center"> Login to STRAX </h3>
                    </div>
                    <form action="{{url('user/sign-in')}}" method="post" id="theFormLog" onsubmit="location.reload()">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group login-username">
                                <div>
                                    <input name="log_email" class="form-control input" size="20"
                                           placeholder="Enter Email" type="email" spellcheck="false" required autofocus
                                           @if($title!='404 page')
                                           value="{{old('log_email')}}"
                                           @endif
                                           >
                                </div>
                            </div>
                            <div class="form-group login-password">
                                <div>
                                    <input name="log_password" class="form-control input" size="20"
                                           placeholder="Password" type="password" required>
                                </div>
                            </div>
                            <div class="hide">
                                <input name="rd" size="500" type="hidden" 
                                       @if($page_url!=url('cart'))
                                       value="{{$page_url}}"
                                       @else
                                       value="{{url('cart/checkout')}}"
                                       @endif
                                       >
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="checkbox login-remember">
                                        <label>
                                            <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                            Remember Me </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name="submit" id="logSubmit" data-rd="{{$page_url}}"class="btn btn-block btn-lg btn-primary log-in" value="LOGIN" type="submit">
                                </div>
                            </div>
                            <!--userForm-->

                        </div>
                    </form>
                    <div class="        modal-footer">
                        <p class="tex        t-center"> Not here before? <a data-toggle="mod        al" data-dismiss="modal"
                                                                            href="#ModalSignup"> Sign Up. </a> <br>
                            <a href="{{ url('forgot-password') }}"> Lost your password? </a></p>
                    </div>
                </div>
                <!-- /.modal-content -->

            </div>
            <!-- /.modal-dialog -->

        </div>
        <!-- /.Modal Login -->
        <!-- Modal Signup start -->
        <div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                        <h3 class="modal-title-site text-center"> REGISTER </h3>
                    </div>
                    <form action="{{url('user/sign-up')}}" method="post" id="theFormReg" onsubmit="location.reload()">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="control-group">
                                <a class="fb_button btn  btn-block btn-lg " href="#">SIGNUP WITH FACEBOOK</a>
                            </div>
                            <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>
                            <div class="form-group reg-username">
                                <div>
                                    <input name="reg_name" 
                                           @if($title!='404 page')
                                           value="{{old('reg_name')}}"
                                           @endif
                                           class="form-control input" size="20"
                                           placeholder="Enter Username" type="text" spellcheck="false" required autofocus>
                                </div>
                            </div>
                            <div class="form-group reg-email">
                                <div>
                                    <input name="reg_email" 
                                           @if($title!='404 page')
                                           value="{{old('reg_email')}}"
                                           @endif
                                           class="form-control input" size="20"
                                           placeholder="Enter Email" type="email" spellcheck="false" required>
                                </div>
                            </div>
                            <div class="form-group reg-password">
                                <div>
                                    <input name="reg_password" class="form-control input" size="20"
                                           placeholder="Password" type="password" required>
                                </div>
                            </div>
                            <div class="form-group reg-password">
                                <div>
                                    <input name="reg_password_confirmation" class="form-control input" size="20"
                                           placeholder="Confirm Password" type="password" required>
                                </div>
                            </div>
                            <div class="hide">
                                <input name="rd" size="500" type="text" 
                                       @if($page_url!=url('cart'))
                                       value="{{$page_url}}"
                                       @else
                                       value="{{url('cart/checkout')}}"
                                       @endif
                                       >
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="checkbox login-remember">
                                        <label>
                                            <input name="rememberme" id="rememberme" value="forever"
                                                   checked="checked" type="checkbox">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input name="submit" id="regSubmit" data-rd="{{$page_url}}" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                                </div>
                            </div>
                            <!--userForm-->
                        </div>
                    </form>
                    <div class="modal-footer">
                        <p class="text-center">Already member?
                            <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">Sign in</a>
                        </p>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.ModalSignup End -->
        @endif
        <!-- Le javascript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha256-1A78rJEdiWTzco6qdn3igTBv9VupN3Q1ozZNTR4WE/Y=" crossorigin="anonymous"></script>
        <!-- ***
<script>
// this script required for subscribe modal
$(window).load(function () {
// full load
$('#modalAds').modal('show');
$('#modalAds').removeClass('hide');
});

</script>
        -->
        <!-- include jqueryCycle plugin -->
        <script src="{{ asset('assets/js/jquery.cycle2.min.js') }}"></script>
        <!-- include easing plugin -->
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>

        <!-- include  parallax plugin -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.parallax-1.1.js') }}"></script>

        <!-- optionally include helper plugins -->
        <script type="text/javascript" src="{{ asset('assets/js/helper-plugins/jquery.mousewheel.min.js') }}"></script>
        <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
        <!-- include icheck plugin // customized checkboxes and radio buttons   -->
        <script type="text/javascript" src="{{ asset('assets/plugins/icheck-1.x/icheck.min.js') }}"></script>
        <!-- include grid.js // for equal Div height  -->
        <script src="{{ asset('assets/plugins/jquery-match-height-master/dist/jquery.matchHeight-min.js') }}"></script>
        <!-- include carousel slider plugin  -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- jQuery select2 // custom select   -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <!-- include touchspin.js // touch friendly input spinner component   -->
        <script src="{{ asset('assets/js/bootstrap.touchspin.js') }}"></script>
        <!-- include custom script for only homepage  -->
        <script src="{{ asset('assets/js/home.js') }}"></script>
        <script src="{{ asset('assets/js/grids.js') }}"></script>
        <script src="{{ asset('assets/js/enquire.min.js') }}"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
        <!-- include custom script for site  -->
        <script src="{{ asset('assets/js/script.js') }}"></script>
        @yield('js_content')
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    </body>
</html>