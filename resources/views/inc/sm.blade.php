@if(Session::has('sm'))
<div class="container row alert-above" id="sm-box">
    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <!--<strong>Well done! </strong> You successfully read this important alert message.-->
            {!!Session::get('sm')!!}
        </div>
    </div>
</div>
@endif