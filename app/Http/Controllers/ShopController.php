<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Categorie,
    App\Product,
    App\order,
    Cart,
    Session;

class ShopController extends MainController {

    public function cart() {
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        self::$data['title'] = 'Cart page';
        return view('HTML.cart', self::$data);
    }

    public function addToCart(Request $request) {
        Product::addToCart($request['id']);
    }

    public function updateCart(Request $request) {
        Product::updateCart($request);
        return redirect('cart');
    }

    public function removeItem(Request $request) {
        Cart::remove($request['id']);
        return redirect('cart');
    }

    public function clearCart() {
        Cart::clear();
        return redirect('cart');
    }

    public function checkout() {
        if (Cart::isEmpty()) {
            return redirect('cart');
        } elseif (!Session::has('user_id')) {
            return redirect('cart')->withErrors('You must sign in to continue to check-out.');
        } else {
            self::$data['title'] = 'One Page Checkout';
            return view('HTML.one-page-checkout', self::$data);
        }
    }

    public function thanksForOrder() {
        if (Cart::isEmpty() || !Session::has('user_id')) {
            return redirect('cart');
        } else {
            Order::save_new();
            self::$data['title'] = 'Thank you for your order';
            return view('HTML.thanks-for-order', self::$data);
        }
    }

    public function item($url_category, $product_url) {
        if($check=Categorie::where('url', '=', $url_category)->first()){
            self::$data['pro_url']=true;
        Product::getItem($product_url, self::$data);
        return view('HTML.product-details-style5-2', self::$data);
        } else {
            return abort(404);
        }
    }

    public function termsConditions() {
        return view('HTML.terms-conditions', self::$data);
    }

    public function product() {
        return view('HTML.ajax.product', self::$data);
    }

    public function categories() {
        self::$data['title'] = 'Categories';
        return view('categories', self::$data);
    }

}
