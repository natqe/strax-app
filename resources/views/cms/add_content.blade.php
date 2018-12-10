@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Add new Content -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/content')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="menu-id">Menu link:</label>
                <select id="menu-id"name="menu_id"class="form-control">
                    <option value="">Choose menu link...</option>
                    @forelse($menu as $item)
                    <option
                    @if(old('menu_id')==$item['id'])
                        selected
                    @endif
                     value="{{$item['id']}}">{{$item['link']}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" value="{{old('title')}}" 
                       class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{old('article')}}</textarea>
            </div>
            <input type="submit" name="submit" value="Save content" class="btn btn-primary">
            <a href="{{url('cms/content')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop