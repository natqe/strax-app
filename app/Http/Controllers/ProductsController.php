<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Session;
use Illuminate\Support\Facades\Storage;

class ProductsController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index()
    {
        self::$data['products'] = Product::all()->toArray();
        return view('cms.products', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.add_product', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::save_new($request);
        Session::flash('sm', 'New product has been created.');
        return redirect('cms/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['id'] = $id;
        return view('cms.delete_product', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['product'] = Product::find($id)->toArray();
        return view('cms.edit_product', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        Product::update_item($request, $id);
        Session::flash('sm', 'Product is Updated.');
        return redirect('cms/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Product::destroy($id);
        if (file_exists(public_path() . "/images/product/" . $product->image)) {
            unlink(public_path() . "/images/product/" . $product->image);
        }
        if (file_exists(public_path() . "/images/product_details/hi-res/" . $product->image_big)) {
            unlink(public_path() . "/images/product_details/hi-res/" . $product->image_big);
        }
        Session::flash('sm', 'Product has been Teleted.');
        return redirect('cms/products');
    }
}
