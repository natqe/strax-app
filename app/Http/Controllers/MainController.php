<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Menu,
    Cart, App\Categorie;

class MainController extends Controller
{

    static public $data = ['title' => ''];

    function __construct()
    {
        self::$data['page_url'] = (isset($_SERVER['HTTPS']) ? "https" : "http") .
            '://' .
            $_SERVER['HTTP_HOST'] . (isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI']);

        self::$data['menu'] = Menu::all()->toArray();
        self::$data['categories'] = Categorie::all()->toArray();
    }

}
