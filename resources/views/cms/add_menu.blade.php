@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Add new Menu Link -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/menu')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="link">Menu link:</label>
                <input type="text" name="link" value="{{old('link')}}" id="link"
                       class="form-control origin-field" placeholder="Menu link" required autofocus>
            </div>
            <div class="form-group">
                <label for="title">Page title(&LT;title&gt;):</label>
                <input type="text" name="title" value="{{old('title')}}" id="title"
                       class="form-control" placeholder="Page title" required>
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{old('url')}}" id="url"
                       class="form-control target-field" placeholder="{{url('')}}/" required>
            </div>
            <input type="submit" name="submit" value="Save menu" class="btn btn-primary">
            <a href="{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop