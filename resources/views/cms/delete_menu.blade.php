@extends('cms.cms_master')

@section('cms_content')
<h3 class="page-header h3">Are you sure you want to delete this menu link ?</h3>
<hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/menu/'.$id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" name="submit" value="Delete menu" class="btn btn-danger">
            <a href="{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop