@extends('cms.cms_master')

@section('cms_content')
<h1 class="page-header">- Edit this product -</h1><hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('cms/products/'.$product['id'])}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$product['id']}}">
            <div class="form-group">
                <label for="category-id">Ceange category:</label>
                <select id="category-id"name="categorie_id"class="form-control">
                    <option value="">Choose category...</option>
                    @forelse($categories as $item)
                    <option
                    @if($product['categorie_id']==$item['id'])
                        selected
                    @endif
                     value="{{$item['id']}}">{{$item['title']}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{$product['title']}}" id="title"
                       class="form-control origin-field" placeholder="Page title">
            </div>
            <div class="form-group">
                <label for="url">Page url:</label>
                <input type="text" name="url" value="{{$product['url']}}" id="url"
                       class="form-control target-field" placeholder="{{url('')}}/">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" value="{{$product['price']}}" id="price"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" value="{{$product['discount']}}" id="discount"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="description-grid">Description grid:</label>
                <textarea id="description-grid" name="description_grid" class="form-control">{{$product['description_grid']}}</textarea>
            </div>
            <div class="form-group">
                <label for="description-list">Description list:</label>
                <textarea id="description-list" name="description_list" class="form-control">{{$product['description_list']}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Ceange Image (285x380):</label><br>
                <img width='100px'src="{{asset('images/product/'.$product['image'])}}">
                <br><br>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="image_big">Ceange the big image (3200x3558):</label><br>
                <img width='100px' src="{{asset('images/product_details/hi-res/'.$product['image_big'])}}">
                <br><br>
                <input type="file" name="image_big" id="image_big">
            </div>
            <input type="submit" name="submit" value="Update Product" class="btn btn-primary">
            <a href="{{url('cms/products')}}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
@stop