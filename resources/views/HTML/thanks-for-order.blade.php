@extends('master')
@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('categories') }}">Shopping</a></li>
                <li class="active">Order</li>
            </ul>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12 ">
            <div class="row userInfo">
                <div class="thanxContent text-center">
                    <h1> Thank you for your order <a href="{{ url('order-status') }}">#{!!Session::get('order_id')!!}</a></h1>
                    <h4>we'll let you know when your items are on their way</h4>
                </div>
                
                <div class="col-lg-7 col-center">
                    <h4></h4>
                    <div class="cartContent table-responsive  w100">
                        <table style="width:100%" class="cartTable cartTableBorder">
                            <tbody>
                            <tr class="CartProduct  cartTableHeader">
                                <td colspan="3"> Items to be Shipped</td>
                                <td style="width:15%"></td>
                            </tr>
                            @foreach (Session::get('order_data') as $item)
                            <tr class="CartProduct">
                                <td class="CartProductThumb">
                                    <div>
                                        <a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">
                                            <img alt="img" src="{{ asset('images/product/'.$item['attributes']['product']['image']) }}">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="CartDescription">
                                        <h4><a href="{{ url($item['attributes']['category_url'].'/'. $item['attributes']['product']['url']) }}">{{$item['name']}}</a></h4>
                                        <span class="size">{{$item['attributes']['product']['description_grid']}}</span>
                                        <div class="price"><span>${{$item['price']}}</span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X {{$item['quantity']}} </a></td>
                                
                                <td class="price">${{$item['price']*$item['quantity']}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <!--/row end-->
        </div>
        <!--/rightSidebar-->
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container -->
<div class="gap"></div>
@endsection