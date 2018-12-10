<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Categorie;
use Session;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index()
    {
        self::$data['categories']=Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.add_category', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Categorie::save_new($request);
        Session::flash('sm', 'New category has been created.');
        return redirect('cms/categories');
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
        return view('cms.delete_category', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$data['category'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        Categorie::update_item($request, $id);
        Session::flash('sm', 'Category is Updated.');
        return redirect('cms/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Categorie::findOrFail($id);
        Categorie::destroy($id);
        if (file_exists(public_path()."/images/look3/".$category->image)) {
                unlink(public_path()."/images/look3/".$category->image);
        }
        if (file_exists(public_path()."/images/slider/single-img/".$category->slider)) {
            unlink(public_path()."/images/slider/single-img/".$category->slider);
        }
        Session::flash('sm', 'Category has been Teleted.');
        return redirect('cms/categories');
    }
}
