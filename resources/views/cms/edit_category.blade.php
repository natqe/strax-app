@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Edit this Category -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/categories/'.$category['id'])}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$category['id']}}">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{$category['title']}}" id="title"
                       class="form-control origin-field" placeholder="Page title">
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{$category['url']}}" id="url"
                       class="form-control target-field" placeholder="{{url('')}}/">
            </div>
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{$category['article']}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Ceange Image (600x400):</label><br>
                <img width='100px'src="{{asset('images/look3/'.$category['image'])}}">
                <br><br>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="slider">Ceange Slider (1920x800):</label><br>
                <img width='100px' src="{{asset('images/slider/single-img/'.$category['slider'])}}">
                <br><br>
                <input type="file" name="slider" id="slider">
            </div>
            <input type="submit" name="submit" value="Update Category" class="btn btn-primary">
            <a href="{{url('cms/categories')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop