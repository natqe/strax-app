<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Categorie,
    Cart,
    App\Menu,
    App\Product,    App\Content;

class PagesController extends MainController {

    public function home() {
        self::$data['products'] = Product::all()->toArray();
        self::$data['title'] = 'Home';
        return view('HTML.home', self::$data);
    }

    public function about() {
        self::$data['title'] = 'About us';
        return view('HTML.about-us-3', self::$data);
    }

    public function help() {
        self::$data['title'] = 'Help page';
        return view('help', self::$data);
    }

    public function contact() {
        self::$data['title'] = 'Contact us';
        return view('HTML.contact-us-2', self::$data);
    }

    public function searchPage($url) {
        if ($check=Categorie::whereUrl($url)->first()) {
            Product::getProducts($url, self::$data);
            return view('HTML.category2', self::$data);
        } elseif ($check=Menu::whereUrl($url)->first()) {
            Content::getContents($url, self::$data);
            return view('HTML.blank-page', self::$data);
        } else {
            return abort(404);
        }
    }

}
