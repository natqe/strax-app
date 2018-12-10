<?php

$page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") .
        '://' .
        $_SERVER['HTTP_HOST'] .
        (isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI']);

$title = '404 page';
$menu = App\Menu::all()->toArray();
;
$categories = App\Categorie::all()->toArray();
$errors = [];
?>
@extends('master')

@section('content')
<div class="container headerOffset">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row userInfo">

                <p class="lead text-center"> ... CONTENT NOT FOUND .... </p>

                <h1 class="h1error"><span class="err404"> 404</span> ERROR </h1>

                <h1 class="h1error"><span class="err404"> <i class="fa fa-frown-o"></i></span></h1>


            </div>
            <!--/row end-->
        </div>
    </div>
    <!--/.innerPage-->
    <div style="clear:both"></div>
</div>
<!-- /.main-container -->


<div class="gap"></div>
@endsection