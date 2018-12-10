@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Add new Category -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/categories')}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{old('title')}}" id="title"
                       class="form-control origin-field" placeholder="Page title">
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{old('url')}}" id="url"
                       class="form-control target-field" placeholder="{{url('')}}/">
            </div>
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{old('article')}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Category Image (600x400):</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="slider">Category Slider (1920x800):</label>
                <input type="file" name="slider" id="slider">
            </div>
            <input type="submit" name="submit" value="Save Category" class="btn btn-primary">
            <a href="{{url('cms/categories')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop