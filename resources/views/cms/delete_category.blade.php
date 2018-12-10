@extends('cms.cms_master')

@section('cms_content')
<h3 class="page-header h3">Are you sure you want to delete this category ?</h3>
<hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/categories/'.$id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" name="submit" value="Delete Category" class="btn btn-danger">
            <a href="{{url('cms/categories')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop