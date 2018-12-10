<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png')}}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png')}}">
        <title>
            STRAX | Cms dashborad
        </title>
        <!-- Bootstrap core CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->

        @yield('cms_css_content')
        <!-- Custom styles for this template -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/cart-nav.css')}}" rel="stylesheet"><!--*-->
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
        @include('inc.cms_nav')
        @include('inc.sm')
        @include('inc.errors')
        <div class="container">
        @yield('cms_content')
        </div>
        <footer class="footer-bottom margin-top-10">
            <div class="container">
                <p class="pull-left"> &copy; STRAX {{ date('Y') }}. Created by Natan Farkash.</p>
            </div>
        </footer>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        @yield('cms_js_content')
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
        <script src="{{asset('assets/js/sidebar-nav.js')}}"></script><!--*-->
        <script type="text/javascript">
            $(function () {
                var target = $("div.has-overly-shade"),
                        targetHeight = target.outerHeight();
                $(document).scroll(function () {
                    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
                    scrollPercent >= 0 && (target.css("background-color", "rgba(0,0,0," + (1.1 - scrollPercent) + ")"))
                })
            });


            $(function () {
                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    $('#ios-notice').removeClass('hidden');
                    $('.parallax-container').height($(window).height() * 0.5 | 0);
                } else {
                    $(window).resize(function () {
                        var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
                        $('.parallax-container').height(parallaxHeight);
                    }).trigger('resize');
                }
            });


            $(document).ready(function () {
                var isMobile = function () {
                    //console.log("Navigator: " + navigator.userAgent);
                    return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
                };

                if (isMobile()) {
                    // For  mobile , ipad, tab
                    $('.animateme').removeClass('animateme');
                    $('.if-is-mobile').addClass('ismobile');

                } else {
                }


            }); // end
        </script>
    </body>
</html>