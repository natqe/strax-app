@extends('master')
@section('css_content')
<link href="{{ asset('assets/css/category-2.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<script>
//angular
angular.module('theModule', []).
    controller('theController', ($rootScope, $scope, $http) => {
        $scope.getProducts = products => {
            $rootScope.products = products;
        }
        $scope.sortColumn = 'price';
        $scope.reverseSort = false;
        $scope.sortData = function (column) {
            $scope.reverseSort = ($scope.sortColumn == column) ? !$scope.reverseSort : false;
            $scope.sortColumn = column;
        }
        $scope.addToCart = function () {
            $http({
                method: "GET",
                    url: BASE_URL + "add-to-cart?id=" + this.product.id
                }).then(function (response) {
                    $rootScope.data = response.data;
                    window.location.reload();
                });
            };
    }).
    controller('cartController', ($rootScope, $scope) => {
        $scope.getCart = cart => {
            $rootScope.cart = cart;
        }
    });
</script>
@endsection

@section('content')
@if($products)
<section class="category-wrapper" ng-app='theModule'>
    <section id="category-intro" class="section-intro scrollme parallaxOffset">
        <div class="cat-intro animateme" data-when="exit"
             data-from="0"
             data-to="1"
             data-opacity="0"
             data-translatey="-220"
             data-rotatez="0"
             data-crop="true">
            <div class="cat-intro-text">
                <div class="display-table hw100">
                    <div class="display-table-cell hw100">
                        <div class="box-text-cell-inner white animateme" data-when="exit"
                             data-from="0"
                             data-to="1"
                             data-opacity="0"
                             data-translatey="-260"
                             data-rotatez="0"
                             data-crop="true">
                            <h1 style="font-size: 5.5em;">SHOP {{ $h1_title }}</h1>
                            <p>{{$article}} </p>
                            <p><a style="color:#fff" href="#main-container-wrapper" class="scrollto">
                                    <i class="fa fa-2x fa-angle-down"></i>
                                </a>
                            </p>                                                               
                        </div>
                    </div>
                </div>
            </div>
            <!--/.cat-intro-text-->
            <img src='{{ asset("images/slider/single-img/$slider") }}' alt="img" class=" cat-intro-banner">
        </div>
    </section>
    <section class="main-container-wrapper clearfix" id="main-container-wrapper" ng-controller='theController' ng-init="getProducts({{json_encode($products)}})">
        <div class="container main-container">
            <!-- Main component call to action -->
            <div class="row">
                <div class="catTopBar clearfix">
                    <div class="catTopBarInner clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="f-right">
                                <div class="w100  clearfix center-xs-inner">
                                    <p class="pull-left shrtByP center-xs"><span>Sort By :</span> 
                                    <a ng-click='sortData("updated_at")'>DATE</a> | <a ng-click='sortData("title")'>POPULAR</a>| <a ng-click='sortData("price")'>PRICE</a>
                                    </p>
                                    <div class="pull-right hidden-xs">
                                        <p class="pull-right change-view-flat"><span>View By :</span> 
                                        <a href="#"  title="Grid" class="grid-view"><i class="fa fa-th-large"></i></a> 
                                        | 
                                        <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--left column-->
                <div class="catColumnWrapper">
                    <!--right column-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12 categoryColumn">
                        <!--/.productFilter-->
                        <div class="row  categoryProduct xsResponse clearfix">
                            <div class="item col-sm-3 col-lg-3 col-md-3 col-xs-6" ng-repeat="product in products| orderBy: sortColumn : reverseSort">
                                <div class="product">
                                    <a class="add-fav tooltipHere" data-toggle="tooltip"
                                       data-original-title="Add to Wishlist" data-placement="left">
                                        <i class="glyphicon glyphicon-heart"></i>
                                    </a>
                                    <div class="image">
                                        <a ng-href="{{ url($url_category)}}/@{{product.url}}">
                                            <img ng-src="{{ asset('images/product') }}/@{{product.image}}" alt="img" class="img-responsive">
                                        </a>
                                        <div class="promotion">
                                            <span class="discount" ng-show='product.discount'>@{{product.discount}} OFF</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <h4><a ng-href="{{ url($url_category)}}/@{{product.url}}">@{{ product.title }}</a></h4>
                                        <div class="grid-description">
                                            <p>@{{ product.description_grid }}</p>
                                        </div>
                                        <div class="list-description">
                                            <p>@{{ product.description_list }}</p>
                                        </div>
                                    </div>
                                    <div class="price"><span>$@{{ product.price }}</span></div>
                                    <div class="action-control"ng-controller='cartController' ng-init="getCart({{json_encode(Cart::getContent()->toArray())}})">
                                        <a disabled='disabled' class="btn btn-primary btn-lg" ng-show='cart[product.id]'>
                                            <i class="glyphicon glyphicon-shopping-cart"></i>
                                            <span class="add2cart">
                                                In cart 
                                            </span>
                                        </a>
                                        <a  class="btn btn-primary btn-lg add-to-cart" ng-id="@{{product.id}}" ng-click="addToCart()"ng-show='!cart[product.id]'>
                                            <span class="add2cart">
                                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                                Add to cart 
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.item-->
                        </div>
                        <!--/.categoryProduct || product content end-->
                        <div class="w100 categoryFooter">
                            <div class="pagination pull-left no-margin-top">
                                <ul class="pagination no-margin-top list-group">
                                    <li><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.categoryFooter-->
                    </div>
                    <!--/right column end-->
                </div>
                <!--/.catColumnWrapper-->
            </div>
            <!-- /.row  -->
        </div>
        <!-- /main container -->
    </section>
</section>
<!-- /category-wrapper -->
@else
<br><br><br><br><br><br>
<h1 class="title-big text-center">
    <p><i>Whoops, looks like we have no products here.</i></p>
</h1>
@endif

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


@section('js_content')
<script src="{{ asset('assets/js/hideMaxListItem-min.js') }}"></script>
<!-- scrollme || onscroll parallax effect for category page  -->
<script src="{{ asset('assets/js/jquery.scrollme.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('ul.long-list').hideMaxListItems({
        'max': 6,
        'speed': 500,
        'moreText': 'VIEW MORE ([COUNT])',
        'lessText': 'VIEW LESS',
        'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
    });
    var isMobile = function () {
//console.log("Navigator: " + navigator.userAgent);
        return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
    };

    if (isMobile()) {
// For  mobile , ipad, tab
        $('.animateme').removeClass('animateme');
        $('.category-wrapper').addClass('ismobile');
        $('.main-container-wrapper').addClass('ismobile');
        $('#category-intro').addClass('ismobile');

    } else {
    }

}); 
// end
</script>
@endsection