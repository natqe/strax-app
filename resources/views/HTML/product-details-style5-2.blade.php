@extends('master') 

@section('css_content')
<!-- Custom styles for this template -->
<link href="{{ asset('assets/css/home-v7.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/cart-nav.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/product-details-5.css') }}" rel="stylesheet">
<!-- gall-item Gallery for gallery page -->
<link href="{{ asset('assets/plugins/magnific/magnific-popup.css') }}" rel="stylesheet"> 
@endsection 

@section('content') 
@if($product)
<section class="section-product-info">
	<div class="container-1400 container   main-container product-details-container">
		<div class="row">
			<!-- left column -->
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<div class="product-images-carousel-wrapper">
					<div class="product-images-carousel">
						<div class="product-carousel-item">
							<span class="zoom-image-overly" data-image="{{ asset('images/product_details/hi-res/'.$product['image_big']) }}">
							</span>
							<img class="img-responsive product-carousel-item-img lazyOwl " data-src="{{ asset('images/product_details/hi-res/'.$product['image_big']) }}" alt='Image Title' />
						</div>
					</div>
				</div>
			</div>
			<!--/ left column end -->

			<!-- right column -->
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<div class="product-details-info-wrapper">
					<h2 class="product-details-product-title"> {{ $h2_title }}</h2>
					<div class="grid-description">
						<p>{!! $product['description_grid'] !!}</p>
					</div>
					<br>
					<div class="product-price">
						<span class="price-sales" style="font-size: 1em">${{ $product['price'] }}</span>
						<span class="price-tag"> including tax</span>
					</div>
					<div class="row row-filter clearfix ">
						<div class="col-xs-12">
							<select class="form-control">
								<option value="strawberries" selected>Quantity</option>
								<option value="mango">1</option>
								<option value="bananas">2</option>
								<option value="watermelon">3</option>
								<option value="grapes">4</option>
								<option value="oranges">5</option>
								<option value="pineapple">6</option>
								<option value="peaches">7</option>
								<option value="cherries">8</option>
							</select>
						</div>
					</div>
					<!-- productFilter -->
					<div class="row row-cart-actions clearfix ">
						<div class="col-sm-12 ">
							@if( Cart::get($product['id']) )
							<a disabled='disabled' class="btn btn-block btn-dark">In cart</a>
							@else
							<a data-id="{{$product['id']}}" class="btn btn-block btn-dark add-to-cart">Add to cart</a>
							@endif
							<a class="btn btn-block btn-gray add-to-Wishlist">Add to Wishlist</a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="product-share clearfix">
						<p> SHARE </p>
						<div class="socialIcon">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
						<br>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
			<!--/ right column end -->
		</div>
		<!--/.row-->
		<div style="clear:both"></div>
	</div>
	<!-- /.product-details-container -->
</section>

<section class="section-product-info-bottom">
	<div class="product-details-bottom-bar">
		<div class="container-1400 container">
			<div class="row">
				<div class="col-lg-8">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs flat list-unstyled list-inline social-inline" role="tablist">
						<li role="presentation" class="active">
							<a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Product details</a>
						</li>
						<li role="presentation">
							<a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab">Product Review</a>
						</li>

					</ul>
				</div>
				<div class="col-lg-4">
					<div class="review-title-bar">


					</div>
				</div>
			</div>

		</div>
	</div>


</section>

<section class="section-tab-content">

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="tab1">
			<div class="product-story-inner ">

				<div class="container">

					<div class="row ">

						<div class="col-lg-12 ">
							<div class="hw100 display-table">
								<div class="hw100 display-table-cell">


									<div class="product-story-info-box">
										<div class="product-story-info-text ">
											<h5 class="subtitle">The Story</h5>
											<h3 class="title">Product Features</h3>
											<p class="desc">{!! $product['description_list'] !!}</p>
										</div>
									</div>


								</div>
							</div>

						</div>
					</div>


				</div>

			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="tab4">
			<section class="section-review whitebg" id="product-review">


				<div class="container">

					<div class="hero-section-header productReviewTitleBAr">
						<h3 class="hero-section-title">
							<i class="fa fa-2x  fa-comments-o"></i> Product Review</h3>

						<div class="rating commentRating">
							<p>
								<span>
									<i class="fa fa-star"></i>
								</span>
								<span>
									<i class="fa fa-star"></i>
								</span>
								<span>
									<i class="fa fa-star"></i>
								</span>
								<span>
									<i class="fa fa-star"></i>
								</span>
								<span>
									<i class="fa fa-star-o "></i>
								</span>


								<span class="ratingInfo">

									<span class="ratingNumber">4.0 </span> Average rating</span>
							</p>
						</div>
					</div>
					<div class="all-review-wrapper ">
						<div class="row review-item">
							<div class="col-lg-3 col-sm-3  left">
								<div class="review-item-user">
									<div class="review-item-user-profile">
										<img class="img-circle" alt="" src="{{ asset('images/product_details/user-2.jpg') }}">
									</div>
									<div class="user-name">
										<p>John Doe </p>
										<small>5m ago</small>
									</div>
								</div>
							</div>
							<div class="col-lg-9  col-sm-9 right">
								<div class="rating commentRating">
									<p>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star-o "></i>
										</span>
										<span class="ratingInfo">
											<span> / </span>
											<a data-target="#modal-review" data-toggle="modal">
												4.0 </a>
										</span>
									</p>
								</div>
								<h5 class="reviewUserTitle">
									<strong>Great product and very useful!</strong>
								</h5>

								<p class="commentText">
									Lorem ipsum dolor sit amet, nam odio prompta ne. Mea semper repudiare in, eos ei dico tamquam noluisse. Nec albucius lucilius
									i ntellegebat at, cu epicurei rationibus est. Eos ei eros civibus ullamcorper, nominavi repudiare vis at. Consul albucius
									assentior id vim, ei sit mazim dissentias, pri ea melius laoreet delicatissimi.</p>


							</div>


						</div>

						<div class="row review-item">
							<div class="col-lg-3 col-sm-3  left">
								<div class="review-item-user">
									<div class="review-item-user-profile">
										<img class="img-circle" alt="" src="{{ asset('images/site/default-user.png') }}">
									</div>
									<div class="user-name">
										<p>John Doe </p>
										<small>5m ago</small>
									</div>

								</div>
							</div>

							<div class="col-lg-9  col-sm-9 right">


								<div class="rating commentRating">
									<p>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star-o "></i>
										</span>
										<span class="ratingInfo">
											<span> / </span>
											<a data-target="#modal-review" data-toggle="modal">
												4.0 </a>
										</span>
									</p>
								</div>
								<h5 class="reviewUserTitle">
									<strong>In a professional context !</strong>
								</h5>

								<p class="commentText">
									Ut eam tamquam ullamcorper vituperatoribus. Saepe nonumy complectitur duo id, eam labores ponderum no, timeam elaboraret repudiandae
									ea quo. Dolores efficiendi complectitur eos eu. Id sed brute nemore, eu sed agam democritum intellegam.</p>


							</div>


						</div>

						<div class="row review-item">
							<div class="col-lg-3 col-sm-3  left">
								<div class="review-item-user">
									<div class="review-item-user-profile">
										<img class="img-circle" alt="" src="{{ asset('images/product_details/user-2.jpg') }}">
									</div>
									<div class="user-name">
										<p>John Doe </p>
										<small>5m ago</small>
									</div>

								</div>
							</div>

							<div class="col-lg-9  col-sm-9 right">


								<div class="rating commentRating">
									<p>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star"></i>
										</span>
										<span>
											<i class="fa fa-star-o "></i>
										</span>
										<span class="ratingInfo">
											<span> / </span>
											<a data-target="#modal-review" data-toggle="modal">
												4.0 </a>
										</span>
									</p>
								</div>
								<h5 class="reviewUserTitle">
									<strong>Sed ut perspiciatis!</strong>
								</h5>

								<p class="commentText">

									Graece utamur reformidans vix in. No iisque detraxit senserit vim, mei ut menandri periculis. Eu vide dolorum cotidieque vix,
									cum minim voluptua principes ad. Mei omnis option persius ut, pri fastidii oporteat complectitur et, est cu novum temporibus.
									Id nulla semper dolorum pro.</p>


							</div>


						</div>


						<div class="row">
							<div class="col-lg-12 review-load-more">
								<div class=" text-center">
									<a href="#" class="btn  btn-default  ">
										<i class="fa fa-plus-sign">+</i> Load 8 more reviews</a>
									<a class="btn  btn-success" data-target="#modal-review" data-toggle="modal">
										<i class="fa fa-edit"></i> Write reviews</a>
								</div>
							</div>
						</div>


					</div>

				</div>


			</section>


		</div>
	</div>

</section>
<!-- /.section-review -->
<!-- Modal review start -->
<div class="modal  fade" id="modal-size-guide" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
				<h3 class="modal-title-site text-center">SIZE GUIDE </h3>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="sizeguide-table table table-bordered">
						<thead>
							<tr>
								<th colspan="6">Women's Clothing</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Size</th>
								<td>X-Small</td>
								<td>Small</td>
								<td>Medium</td>
								<td>Large</td>
								<td>X-Large</td>
							</tr>
							<tr>
								<th>UK</th>
								<td>8</td>
								<td>10</td>
								<td>12</td>
								<td>14</td>
								<td>16</td>
							</tr>
							<tr>
								<th>USA</th>
								<td>4</td>
								<td>6</td>
								<td>8</td>
								<td>10</td>
								<td>12</td>
							</tr>
							<tr>
								<th>JAPAN</th>
								<td>7</td>
								<td>9</td>
								<td>11</td>
								<td>13</td>
								<td>15</td>
							</tr>
							<tr>
								<th>Bust(cm)</th>
								<td>84</td>
								<td>88</td>
								<td>92</td>
								<td>98</td>
								<td>104</td>
							</tr>
							<tr>
								<th>Bust(inches)</th>
								<td>33</td>
								<td>34.5</td>
								<td>36</td>
								<td>38.5</td>
								<td>40</td>
							</tr>
							<tr>
								<th>Waist(cm)</th>
								<td>66</td>
								<td>70</td>
								<td>74</td>
								<td>80</td>
								<td>86</td>
							</tr>
							<tr>
								<th>Waist(inches)</th>
								<td>26</td>
								<td>27.5</td>
								<td>29</td>
								<td>31.5</td>
								<td>34</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal review start -->
<div class="modal  fade" id="modal-review" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
				<h3 class="modal-title-site text-center">PRODUCT REVIEW </h3>
			</div>
			<div class="modal-body">

				<h3 class="reviewtitle uppercase">You're reviewing: Lorem ipsum dolor sit amet</h3>

				<form>
					<div class="form-group">
						<label>
							How do you rate this product? </label>
						<br>

						<div class="rating-here">
							<input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star fa-2x" data-empty="fa fa-star-o fa-2x" data-fractions="3"
							/>

						</div>
					</div>
					<div class="form-group">
						<label for="rtext">Name</label>
						<input type="text" class="form-control" id="rtext" placeholder="Your name" required>
					</div>

					<div class="form-group ">
						<label>Review</label>
						<textarea class="form-control" rows="3" placeholder="Your Review" required></textarea>

					</div>


					<button type="submit" class="btn btn-success">Submit Review</button>
				</form>


			</div>

		</div>
		<!-- /.modal-content -->

	</div>
	<!-- /.modal-dialog -->

</div>
<!-- /.Modal review -->
@else
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="title-big text-center">
	<p>
		<i>No product found...</i>
	</p>
</h1>
@endif @endsection @section('js_content')
<script src="{{ asset('assets/plugins/magnific/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/plugins/rating/bootstrap-rating.min.js') }}"></script>

<script>
	// For Demo purposes only
[].slice.call(document.querySelectorAll('nav.nav-narrow-svg > a')).forEach(function (el) {
    el.addEventListener('click', function (ev) {
        ev.preventDefault();
    });
});

// productShowCase  carousel
var pic = $(".product-images-carousel");

pic.owlCarousel({
    autoPlay: false,
    lazyLoad: true,
    navigation: false,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    singleItem: true,
    autoHeight: true


});

// Custom Navigation Events
$(".product-images-carousel-wrapper nav.slider-nav .next").click(function () {
    pic.trigger('owl.next');
})
$(".product-images-carousel-wrapper nav.slider-nav  .prev").click(function () {
    pic.trigger('owl.prev');
})

</script>
<script>
	$(function () {
        $('.rating-tooltip-manual').rating({
            extendSymbol: function () {
                var title;
                $(this).tooltip({
                    container: 'body',
                    placement: 'bottom',
                    trigger: 'manual',
                    title: function () {
                        return title;
                    }
                });
                $(this).on('rating.rateenter', function (e, rate) {
                    title = rate;
                    $(this).tooltip('show');
                })
                        .on('rating.rateleave', function () {
                            $(this).tooltip('hide');
                        });
            }
        });

    });

</script>


<script src="{{ asset('assets/plugins/intense-images-master/intense.js') }}"></script>

<script>
	var elements = document.querySelectorAll('.zoom-image-overly');
    Intense(elements);

</script>
@endsection