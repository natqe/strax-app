@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Edit this Content -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/content/'.$content['id'])}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="menu-id">Menu link:</label>
                <select id="menu-id"name="menu_id"class="form-control">
                    @forelse($menu as $item)
                    <option
                    @if($content['menu_id']==$item['id'])
                        selected
                    @endif
                     value="{{$item['id']}}">{{$item['link']}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" value="{{$content['title']}}" 
                       class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{$content['article']}}</textarea>
            </div>
            <input type="submit" name="submit" value="Update Content" class="btn btn-primary">
            <a href="{{url('cms/content')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop