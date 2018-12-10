@extends('master')

@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('categories') }}">Shopping</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
            <h1 class="section-title-inner">
                <span><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart </span>
            </h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
            <h4 class="caps"><a href="{{ url('categories') }}"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    @if($cart)
                    <div class="cartContent w100">
                        <table class="cartTable table-responsive" style="width:100%">
                            <tbody>

                                <tr class="CartProduct cartTableHeader">
                                    <td style="width:15%"> Product</td>
                                    <td style="width:40%">Details</td>
                                    <td style="width:10%">QNT</td>
                                    <td style="width:10%">Discount</td>
                                    <td style="width:15%">Total</td>
                                    <td style="width:10%" class="delete">&nbsp;</td>
                                </tr>
                                @foreach( $cart as $item )
                                <tr class="CartProduct">
                                    <td class="CartProductThumb">
                                        <div><a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">
                                                <img src="{{ asset('images/product/'.$item['attributes']['product']['image']) }}" alt="img"></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="CartDescription">
                                            <h4>
                                                <a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">
                                                    {{$item['name']}}
                                                </a>
                                            </h4>
                                            <span class="size">{{$item['attributes']['product']['description_grid']}}</span>
                                            <br><br>
                                            <div class="price"><span>${{$item['price']}}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <input class="quanitySniper" data-id='{{$item['id']}}' type="text" value="{{$item['quantity']}}" name="quanitySniper">
                                    </td>
                                    <td>{{$item['attributes']['product']['discount']}}</td>
                                    <td class="price">
                                        ${{$item['quantity']*$item['price']}}
                                    </td>
                                    <td class="delete">
                                        <a href="{{url('cart/remove-item?id='.$item['id'])}}" title="Delete">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->
                    @else
                    <h1 class="title-big text-center">
                        <p>NO ITEMS IN CART...</p>
                    </h1>
                    @endif
                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-left"><a href="{{ url('categories') }}" class="btn btn-default"> <i
                                        class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
                            <div class="pull-right">
                                <a
                                    @if($cart)
                                    href="{{url('cart/clear-cart')}}"
                                    @else
                                    disabled='disabled'
                                    @endif
                                    class="btn btn-default">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    &nbsp; Clear cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <div class="contentBox">
                <div class="w100 costDetails">
                    <div class="table-block" id="order-detail-content">
                        @if($cart)
                        <a class="btn btn-primary btn-lg btn-block" title="checkout"
                           @if(Session::has('user_id'))
                           href="{{ url('cart/checkout') }}"
                           @else
                           href="#" data-toggle="modal" data-target="#ModalLogin"
                           @endif
                           style="margin-bottom:20px">
                           Proceed to checkout &nbsp; 
                           <i class="fa fa-arrow-right"></i> 
                        </a>
                        @endif
                        <div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                <tbody>
                                    <tr>
                                        <td>Total products</td>
                                        <td class="price">${{Cart::getSubTotal()}}</td>
                                    </tr>
                                    <tr style="">
                                        <td>Shipping</td>
                                        <td class="price"><span class="success">Free shipping!</span></td>
                                    </tr>
                                    <tr class="cart-total-price ">
                                        <td>Total (tax excl.)</td>
                                        <td class="price">${{Cart::getSubTotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total tax</td>
                                        <td class="price" id="total-tax">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td> Total</td>
                                        <td class=" site-color" id="total-price">${{Cart::getSubTotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="input-append couponForm">
                                                <input class="col-lg-8" id="appendedInputButton" type="text"
                                                       placeholder="Coupon code">
                                                <button class="col-lg-4 btn btn-success" type="button">Apply!</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container -->
<div class="gap"></div>
@endsection