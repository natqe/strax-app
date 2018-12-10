@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Edit this Menu Link -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/menu/'.$this_menu['id'])}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$this_menu['id']}}">
            <div class="form-group">
                <label for="link">Menu link:</label>
                <input type="text" name="link" value="{{$this_menu['link']}}" id="link"
                       class="form-control origin-field" placeholder="Menu link" required>
            </div>
            <div class="form-group">
                <label for="title">Page title(&LT;title&gt;):</label>
                <input type="text" name="title" value="{{$this_menu['title']}}" id="title"
                       class="form-control" placeholder="Page title" required>
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{$this_menu['url']}}" id="url"
                       class="form-control target-field" placeholder="{{url('')}}/" required>
            </div>
            <input type="submit" name="submit" value="Update menu" class="btn btn-primary">
            <a href="{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop