<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <li>
                                <a href="{{ url('help') }}"> 
                                    <span class="hidden-xs">HELP</span>
                                    <i class="glyphicon glyphicon-info-sign hide visible-xs "></i> 
                                </a>
                            </li>
                            <li class="phone-number">
                                <a href="callto:+972587650606">
                                    <span><i class="glyphicon glyphicon-phone-alt "></i></span>
                                    <span class="hidden-xs" style="margin-left:5px"> +972-58-765-0606 </span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            @if( ! Session::has('user_id'))
                            <li>
                                <a href="#" data-toggle="modal" data-target="#ModalLogin">
                                    <span class="hidden-xs">Sign In</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#ModalSignup">
                                    <span class="hidden-xs">Create Account</span>
                                    <i class="glyphicon glyphicon-registration-mark hide visible-xs "></i>
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{ url('account') }}">
                                    <span class="hidden-xs"> My Account</span>
                                    <i class="glyphicon glyphicon-user hide visible-xs "></i>
                                </a>
                            </li>
                            <li class="dropdown hasUserMenu">
                                <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" 
                                   aria-expanded="false">
                                    <span class="hidden-xs"> Hi, {!!Session::get('user_name')!!}</span>
                                    <b class="caret hidden-xs"></b>
                                </a>
                                <ul class="dropdown-menu hidden-xs">
                                    <li><a href="account.html">
                                            <i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="account.html">
                                            <i class="fa fa fa-cog"></i> Profile</a></li>
                                    <li><a href="my-address.html">
                                            <i class="fa fa-map-marker"></i> Addresses</a></li>
                                    <li><a href="order-list.html">
                                            <i class="fa  fa-calendar"></i> Orders</a></li>
                                    <li><a href="wishlist.html" title="My wishlists">
                                            <i class="fa fa-heart"></i>My wishlists</a></li>
                                    <li class="divider"></li>
                                    <li><a class="logOut" data-rd="{{$page_url}}" href="{{ url('user/log-out') }}"><i class="fa  fa-sign-out"></i> Log Out</a></li>
                                </ul>
                                <a class="hide visible-xs logOut" href="{{ url('user/log-out') }}">
                                    <i class="glyphicon glyphicon-log-out hide visible-xs "></i>
                                </a>
                            </li>
                            @endif
                            @if(Session::get('is_admin'))
                            <li>
                                <a href="{{ url('cms/dashboard') }}">
                                    <span class="hidden-xs">CMS DASHBOARD</span>
                                    <i class="glyphicon glyphicon-edit hide visible-xs "></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart">
                <i class="fa fa-shopping-cart colorWhite"> </i>
                <span class="cartRespons colorWhite"> Cart (${{Cart::getSubTotal()}}) </span>
            </button>
            <a class="navbar-brand " href="{{ url('') }}">
                <img src="{{ asset('images/logo.png') }}" alt="STRAX">
            </a>

            <!-- this part for mobile -->
            <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                <div class="input-group">
                    <button class="btn btn-nobg getFullSearch" type="button">
                        <i class="fa fa-search"> </i>
                    </button>
                </div>
                <!-- /input-group -->
            </div>
        </div>
        @if($c = Cart::getContent()->toArray())
        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class="navbar-cart  collapse">
            <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">
                    <table>
                        <tbody>
                            @foreach( $c as $item )
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div>
                                        <a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}"> 
                                            <img src="{{ asset('images/product/'.$item['attributes']['product']['image']) }}" alt="img"> 
                                        </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4>
                                            <a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">
                                                {{$item['name']}}
                                            </a>
                                        </h4>
                                        <div class="price"><span>${{$item['price']}}</span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X {{$item['quantity']}} </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span>${{$item['quantity']*$item['price']}}</span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--/.miniCartTable-->
                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: ${{Cart::getSubTotal()}} </h3>
                    <a class="btn btn-sm btn-danger" href="{{ url('cart') }}"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="{{ url('checkout') }}" class="btn btn-sm btn-primary"> CHECKOUT </a>
                </div>
                <!--/.miniCartFooter-->
            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->
        @endif
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li
                    @if($page_url==url('').'/')
                    class="active"
                    @endif
                    >
                    <a href="{{ url('') }}">Home</a>
                </li>
                @if($categories)
                <li class="dropdown
                    @foreach($categories as $category)
                    @if($page_url==url($category['url']))
                    active
                    @endif
                    @endforeach
                    @if($page_url==url('categories')  || $page_url==url('cart')|| $page_url==url('cart/checkout') || isset($pro_url))
                    active
                    @endif
                    ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Shop Products 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="text-transform:uppercase">
                        <li><a href="{{ url('categories') }}">CATEGORIES</a></li>
                        <li class="divider"></li>
                        @foreach($categories as $category)
                        <li><a href="{{ url($category['url']) }}">{{ $category['title'] }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endif
                <li
                    @if(url('about')==$page_url)
                    class="active"
                    @endif
                    ><a href="{{ url('about') }}">About</a></li>
                @if($menu)
                @foreach($menu as $item)
                <li
                    @if(url($item['url'])==$page_url)
                    class="active"
                    @endif
                    ><a href="{{ url($item['url']) }}">{{$item['link']}}</a></li>
                @endforeach
                @endif
                <li
                    @if(url('contact')==$page_url)
                    class="active"
                    @endif
                    ><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cartRespons"> Cart (${{Cart::getSubTotal()}}) </span>
                        @if($c && $page_url!=url('cart'))
                        <b class="caret"> </b>
                        @endif
                    </a>
                    @if($c && $page_url!=url('cart'))
                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                    @foreach( $c as $item )
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div>
                                                <a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">
                                                    <img src="{{ asset('images/product/'.$item['attributes']['product']['image']) }}" alt="img">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">{{$item['name']}}</a></h4>
                                                <div class="price"><span> ${{$item['price']}} </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X {{$item['quantity']}} </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> ${{$item['quantity']*$item['price']}} </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--/.miniCartTable-->

                        <div class="miniCartFooter text-right">
                            <h3 class="text-right subtotal"> Subtotal: ${{Cart::getSubTotal()}} </h3>
                            <a class="btn btn-sm btn-danger" href="{{ url('cart') }}"> 
                                <i class="fa fa-shopping-cart"> </i> 
                                VIEW CART 
                            </a>
                            <a class="btn btn-sm btn-primary" href="{{ url('cart/checkout') }}"> CHECKOUT </a>
                        </div>
                        <!--/.miniCartFooter-->

                    </div>
                    <!--/.dropdown-menu-->
                    @endif
                </div>
                <!--/.cartMenu-->

                <div class="search-box">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
                    <!-- /input-group -->

                </div>
                <!--/.search-box -->
            </div>
            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>

        <div class="searchInputBox pull-right">
            <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
                   class="search-input">
            <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
        </div>
    </div>
    <!--/.search-full-->

</div>
<!-- /.Fixed navbar  -->