<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    protected $fillable = [
        'title','url', 'article','image','slider'
    ];
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
    public static function save_new($request)
    {
        if ($request->hasFile('image')&&$request->file('image')->isValid()) {
            $image_name=date('Y.m.d.H.i.s').'-'.$request->image->getClientOriginalName();
            $request->image->move(public_path()."/images/look3", $image_name);
        } else {
            $image_name='';
        }
        if ($request->hasFile('slider')&&$request->file('slider')->isValid()) {
            $slider_name=date('Y.m.d.H.i.s').'-'.$request->slider->getClientOriginalName();
            $request->slider->move(public_path()."/images/slider/single-img", $slider_name);
        } else {
            $slider_name='';
        }
        $category=new self;
        $category->title=$request['title'];
        $category->article=$request['article'];
        $category->url=$request['url'];
        $category->image=$image_name;
        $category->slider=$slider_name;
        $category->save();
    }
    public static function update_item($request, $id)
    {
        $category=Categorie::findOrFail($id);
        if ($request->hasFile('image')&&$request->file('image')->isValid()) {
            if (file_exists(public_path()."/images/look3/".$category->image)) {
                unlink(public_path()."/images/look3/".$category->image);
            }
            $image_name=date('Y.m.d.H.i.s').'-'.$request->image->getClientOriginalName();
            $request->image->move(public_path()."/images/look3", $image_name);
        } else {
            $image_name='';
        }
        if ($request->hasFile('slider')&&$request->file('slider')->isValid()) {
            if (file_exists(public_path()."/images/slider/single-img/".$category->slider)) {
                unlink(public_path()."/images/slider/single-img/".$category->slider);
            }
            $slider_name=date('Y.m.d.H.i.s').'-'.$request->slider->getClientOriginalName();
            $request->slider->move(public_path()."/images/slider/single-img", $slider_name);
        } else {
            $slider_name='';
        }
        $category->title=$request['title'];
        $category->article=$request['article'];
        $category->url=$request['url'];
        if ($image_name) {
            $category->image=$image_name;
        }
        if ($slider_name) {
            $category->slider=$slider_name;
        }
        $category->save();
    }
}
