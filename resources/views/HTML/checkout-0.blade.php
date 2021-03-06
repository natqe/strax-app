@extends('master')
@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li class="active"> Authentication</li>
            </ul>
        </div>
    </div>
    <!-- /.row -->


    <div class="row">

        <div class="col-lg-12 col-md-12  col-sm-12">

            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Authentication</span></h1>

            <div class="row userInfo">
                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"> Create an account </h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn   btn-primary"><i class="fa fa-user"></i> Create an account
                        </button>
                    </form>
                </div>


                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"><span>Already registered?</span></h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="InputEmail2">Email address</label>
                            <input type="email" class="form-control" id="InputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword2">Password</label>
                            <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox">
                                Remember me </label>
                        </div>
                        <div class="form-group">
                            <p><a title="Recover your forgotten password" href="{{ url('forgot-password') }}">Forgot your
                                password? </a></p>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Sign In</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"><span>Checkout as Guest</span></h2>

                    <p>Don't have an account and you don't want to register? Checkout as a guest instead!</p>
                    <a href="{{ url('checkout-1') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Checkout as
                        Guest</a></div>
            </div>
            <!--/row end-->

        </div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container -->

<div class="gap"></div>
@endsection