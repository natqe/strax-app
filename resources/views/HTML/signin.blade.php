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
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Authentication</span></h1>
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"><span>LOGIN YOUR ACCOUNT</span></h2>
                    <form class="logForm" action="" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="log_email">Email address</label>
                            <input type="text" name="log_email" value="{{old('log_email')}}" 
                                   class="form-control" id="log_email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="log_password">Password</label>
                            <input type="log_password" name="log_password" 
                                   class="form-control" id="log_password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox">
                                Remember me 
                            </label>
                        </div>
                        <div class="form-group">
                            <p>
                                Not here before?<a href="{{url('user/sign-up')}}"> Sign Up.</a>
                                <br>
                                <a title="Recover your forgotten password" 
                                   href="{{ url('forgot-password') }}">Forgot your password? </a>
                            </p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> Sign In</button>
                    </form>
                </div>
            </div>
            <!--/row end-->

        </div>

        <div class="col-lg-3 col-md-3 col-sm-5"></div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /wrapper -->

<div class="gap"></div>


<!-- Le javascript
================================================== -->

<!-- include validate.js // jquery plugin   -->
<script src="{{ asset('assets/js/jquery.validate.js') }}"></script>

<script>
$().ready(function () {
// validate the comment form when it is submitted
$("#regForm").validate();

// validate signup form on keyup and submit
$(".regForm").validate({
    errorLabelContainer: $(".regForm div.error")
});
});
</script>
@endsection