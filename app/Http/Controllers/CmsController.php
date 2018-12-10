<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CmsController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function dashboard()
    {
        return view('cms.dashboard', self::$data);
    }


    public function orders()
    {
        self::$data['orders']=Order::getOrders();
        return view('cms.orders', self::$data);
    }
}
