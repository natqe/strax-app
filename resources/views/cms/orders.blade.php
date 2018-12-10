@extends('cms.cms_master')

@section('cms_content')
<div class="row">
    <div class="breadcrumbDiv col-lg-12">
        <ul class="breadcrumb">
            <li><a href="{{ url('cms/dashboard') }}">Cms</a></li>
            <li class="active">orders</li>
        </ul>
    </div>
</div>
<!--/.row-->
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-xxs-12 col-md-offset-1 col-sm-offset-0">
        <h1 class="text-center-xs">Here you can view users orders.</h1>
        <hr class="hr3">
        @if($orders)
        <table class="table table-hover table-striped margin-top-10 text-center-xs">
            <thead>
                <tr class="cartTableHeader">
                    <th>User</th>
                    <th>Order</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="text-muted">
                    <td>{{$order->name}}</td>
                    <td>
                    <ul>
                    @forelse (unserialize($order->data) as $item)
                        <li>
                        {{$item['name'].': quantity; '.$item['quantity'].', price; '.$item['price'].'$'}}
                        </li>
                    @empty
                        
                    @endforelse
                    </ul>
                    </td>
                    <td>{{$order->total}}$</td>
                    <td>{{$order->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@stop
