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
            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i>Authentication</span></h1>
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2">Create an account</h2>
                    <form class="regForm" action="" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="reg_name">Full name</label>
                            <input title="Please enter your username (at least 3 characters)" type="text" 
                                   name="reg_name" value="{{old('reg_name')}}" class="form-control" id="reg_name" 
                                   placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="reg_email">Email address</label>
                            <input title="Please enter valid email" type="text" name="reg_email" value="{{old('reg_email')}}"
                                   class="form-control" id="reg_email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="reg_password">Password</label>
                            <input title="Please enter your password, between 5 and 12 characters" type="password"
                                   name="reg_password" class="form-control" id="reg_password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="cPassword">Confirm Password</label>
                            <input type="password" name="reg_password_confirmation" class="form-control" id="cPassword"
                                   placeholder="Confirm Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user"></i>
                            Create an account
                        </button>
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