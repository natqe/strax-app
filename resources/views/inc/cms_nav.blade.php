<!-- Fixed navbar start -->
<div class="navbar-cms navbar-fixed-top" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <div class="pull-left">
                        <ul class="userMenu ">
                            <li>
                                <a class="menu-sidebar-toggle">
                                    <i class="fa fa-bars"></i>
                                    <span class="center-logo" title="STRAX - Admin Panel">STRAX</span>
                                    <span class="caps hidden-xs">&nbsp;- &nbsp;Admin Panel</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li>
                                <a href="{{ url('account') }}">
                                    <span class="hidden-xs">My Account</span>
                                    <i class="glyphicon glyphicon-user hide visible-xs" title="My Account"></i>
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
                                    <li><a class="logOut" data-rd="{{$page_url}}" href="{{ url('user/log-out') }}"><i class="fa  fa-sign-out"></i>Log Out</a></li>
                                </ul>
                                <a class="hide visible-xs logOut" href="{{ url('user/log-out') }}">
                                    <i class="glyphicon glyphicon-log-out hide visible-xs" title="Log Out"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{url('')}}">
                                    <span class="hidden-xs">BACK TO SITE</span>
                                    <i class="glyphicon glyphicon-new-window hide visible-xs" title="Back to Site"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.navbar-top-->
</div>
<!-- /.Fixed navbar  -->

<!-- /#search-overly -->
<div class="menu-overly-mask"></div>
<!-- /.overly-mask -->
<aside class="menu-sidebar scroll-pane">
    <div class="menu-sidebar-content">
        <div class="inner">
            <div class="menu-sidebar-header">
                <img src="{{asset('images/logo-dark.png')}}">
            </div>
            <div class="menu-sidebar-nav">
                <ul class="nav-category nav-sidebar nav-tree-light nav-tree menu-cms-a">
                    <li><a href="{{url('cms/dashboard')}}">Dashboard</a></li>
                    <li class="">
                        <a>MENU</a>
                        <ul>
                            <li
                                @if($page_url==url('cms/menu')||$page_url==url('cms/menu/create'))
                                class="active"
                                @endif
                                ><a href="{{ url('cms/menu') }}">Links</a></li>
                            <li
                                @if($page_url==url('cms/content')||$page_url==url('cms/content/create'))
                                class="active"
                                @endif
                                ><a href="{{ url('cms/content') }}">Contents</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('cms/categories') }}">Categories</a></li>
                    <li><a href="{{ url('cms/products') }}">Products</a></li>
                    <li><a href="{{ url('cms/orders') }}">Orders</a></li>
                </ul>
            </div>
        </div>
    </div>
</aside>