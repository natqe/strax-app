@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Add new Product -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/products')}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
            <div class="form-group">
                <label for="category-id">Product category:</label>
                <select id="category-id"name="categorie_id"class="form-control seleCat">
                    <option value="">Choose category...</option>
                    @forelse($categories as $category)
                    <option
                    @if(old('categorie_id')==$category['id'])
                        selected
                    @endif
                    data-category-url="{{$category['url']}}"
                     value="{{$category['id']}}">{{$category['title']}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{old('title')}}" id="title"
                       class="form-control origin-field" placeholder="Page title">
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{old('url')}}" id="url"
                       class="form-control target-field plaUrl" placeholder="{{url('')}}/">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" value="{{old('price')}}" id="price"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" value="{{old('discount')}}" id="discount"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="description-grid">Description grid:</label>
                <textarea id="description-grid" name="description_grid" class="form-control">{{old('description_grid')}}</textarea>
            </div>
            <div class="form-group">
                <label for="description-list">Description list:</label>
                <textarea id="description-list" name="description_list" class="form-control">{{old('description_list')}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Product Image (285x380):</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="image-big">Product big Image (3200x3558):</label>
                <input type="file" name="image_big" id="image-big">
            </div>
            <input type="submit" name="submit" value="Save Product" class="btn btn-primary">
            <a href="{{url('cms/products')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop