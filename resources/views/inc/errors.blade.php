@if ($errors && $errors->any())
<div class="container row alert-above">
    @foreach ($errors->all() as $error)
    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul><li>{{ $error }}</li></ul>
        </div>
    </div>
    @endforeach
</div>
@endif