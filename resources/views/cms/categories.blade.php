@extends('cms.cms_master')

@section('cms_content')
<div class="row">
	<div class="breadcrumbDiv col-lg-12">
		<ul class="breadcrumb">
			<li>
				<a href="{{ url('cms/dashboard') }}">Cms</a>
			</li>
			<li class="active">Categories</li>
		</ul>
	</div>
</div>
<!--/.row-->
<div class="row margin-top-10">
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-xxs-12 col-md-offset-1 col-sm-offset-0">
		<h1 class="text-center-xs">Here you can edit site categories.</h1>
		<hr class="hr3">
		<a class="btn btn-primary" href="{{url('cms/categories/create')}}">+ Add new Category</a>
		@if($categories)
		<table class="table table-hover table-striped margin-top-10 text-center-xs">
			<thead>
				<tr class="cartTableHeader">
					<th>Category Image</th>
					<th>Title</th>
					<th>Update at</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $item)
				<tr>
					<td>
						<img width='100px' src='{{asset('images/slider/single-img/'.$item['slider'])}}'>
					</td>
					<td>{{$item['title']}}</td>
					<td>{{$item['updated_at']}}</td>
					<td>
						<a class="link" href="{{url('cms/categories/'.$item['id'].'/edit')}}">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
						<a class="link" href="{{url('cms/categories/'.$item['id'])}}">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>
@stop