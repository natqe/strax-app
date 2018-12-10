<?php
//User
Route::get('user/sign-up', 'UserController@signup');
Route::post('user/sign-up', 'UserController@postSignup');
Route::get('user/sign-in', 'UserController@signin');
Route::post('user/sign-in', 'UserController@postSignin');
Route::get('user/log-out', 'UserController@logout');
Route::get('account', 'UserController@account');
route::get('wishlist', 'UserController@wishlist');
route::get('my-address', 'UserController@myAddress');
route::get('add-address', 'UserController@addAddress');
route::get('order-list', 'UserController@orderList');
route::get('order-status', 'UserController@orderStatus');
route::get('forgot-password', 'UserController@forgotPassword');
route::get('user-information', 'UserController@userInformation');
route::get('thanks-for-order', 'UserController@thanksForOrder');

//cms
Route::get('cms/dashboard', 'CmsController@dashboard');
Route::get('cms/orders', 'CmsController@orders');
Route::resource('cms/menu','MenuController');
Route::resource('cms/content', 'ContentController');
Route::resource('cms/categories', 'CategoriesController');
Route::resource('cms/products', 'ProductsController');

//Shop
Route::get('cart', 'ShopController@cart');
route::get('cart/update-cart', 'ShopController@updateCart');
Route::get('cart/remove-item', 'ShopController@removeItem');
Route::get('cart/clear-cart', 'ShopController@clearCart');
Route::get('cart/checkout', 'ShopController@checkout');
Route::get('cart/thanks-for-order', 'ShopController@thanksForOrder');
Route::get('categories', 'ShopController@categories');
Route::get('product', 'ShopController@product');
Route::get('terms-conditions', 'ShopController@termsConditions');
Route::get('add-to-cart', 'ShopController@addToCart');
Route::get('{url_category}/{product_url}', 'ShopController@item');

//pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('help', 'PagesController@help');
Route::get('contact', 'PagesController@contact');
Route::get('{url}', 'PagesController@searchPage');