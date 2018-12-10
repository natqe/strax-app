<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart,
    Session;
use App\Product;

class Product extends Model
{

    static public function getProducts($url, &$data)
    {
        $data['products'] = [];
        if ($category = Categorie::where('url', '=', $url)->first()) {
            $category = $category->toArray();
            $data['h1_title'] = $category['title'];
            $data['title'] = $category['title'];
            $data['slider'] = $category['slider'];
            $data['article'] = $category['article'];
            $data['url_category'] = $url;
            if ($products = Categorie::find($category['id'])->products) {
                $data['products'] = $products->toArray();
            }
        }
    }

    static public function getItem($prosuct_url, &$data)
    {
        $data['product'] = [];
        if ($product = self::where('url', '=', $prosuct_url)->first()) {
            $data['product'] = $product->toArray();
            $data['h2_title'] = $data['product']['title'];
            $data['title'] .= $data['product']['title'];
        }
    }

    static public function addToCart($product_id)
    {
        if ($product_id && is_numeric($product_id) && $product = self::find($product_id)) {
            $product = $product->toArray();
            $category_url = Categorie::find($product['categorie_id'])->toArray();
            $category_url = $category_url['url'];
            if (!Cart::get($product_id)) {
                Cart::add($product['id'], $product['title'], $product['price'], 1, array('product' => $product, 'category_url' => $category_url));
                Session::flash('sm', '<strong>' . $product['title'] . '</strong> added to cart successfully.');
            }
        }
    }

    static public function updateCart($request)
    {
        if (!empty($request['val']) && !empty($request['id']) &&
            is_numeric($request['id']) && $product = Cart::get($request['id'])) {
            Cart::update($request['id'], array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request['val']
                ),
            ));
        }
    }

    public static function save_new($request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = date('Y.m.d.H.i.s') . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path()."/images/product", $image_name);
        } else {
            $image_name = '';
        }
        if ($request->hasFile('image_big') && $request->file('image_big')->isValid()) {
            $image_big_name = date('Y.m.d.H.i.s') . '-' . $request->image_big->getClientOriginalName();
            $request->image_big->move(public_path()."/images/product_details/hi-res", $image_big_name);
        } else {
            $image_big_name = '';
        }

        $product = new self;
        $product->title = $request['title'];
        $product->description_grid = $request['description_grid'];
        $product->description_list = $request['description_list'];
        $product->url = $request['url'];
        $product->price = $request['price'];
        $product->discount = $request['discount'];
        $product->categorie_id = $request['categorie_id'];
        $product->image = $image_name;
        $product->image_big = $image_big_name;
        $product->save();
    }
    public static function update_item($request, $id)
    {
        $product = Product::findOrFail($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if (file_exists(public_path() . "/images/product/" . $product->image)) {
                unlink(public_path() . "/images/product/" . $product->image);
            }
            $image_name = date('Y.m.d.H.i.s') . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path()."/images/product", $image_name);
        } else {
            $image_name = '';
        }
        if ($request->hasFile('image_big') && $request->file('image_big')->isValid()) {
            if (file_exists(public_path() . "/images/product_details/hi-res/" . $product->image_big)) {
                unlink(public_path() . "/images/product_details/hi-res/" . $product->image_big);
            }
            $image_big_name = date('Y.m.d.H.i.s') . '-' . $request->image_big->getClientOriginalName();
            $request->image_big->move(public_path()."/images/product_details/hi-res", $image_big_name);
        } else {
            $image_big_name = '';
        }

        $product->title = $request['title'];
        $product->description_grid = $request['description_grid'];
        $product->description_list = $request['description_list'];
        $product->url = $request['url'];
        $product->price = $request['price'];
        $product->discount = $request['discount'];
        $product->categorie_id = $request['categorie_id'];
        
        if ($image_name) {
            $product->image = $image_name;
        }
        if ($image_big_name) {
            $product->image_big = $image_big_name;
        }
        $product->save();
    }
}
