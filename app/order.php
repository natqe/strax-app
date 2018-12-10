<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;

class order extends Model
{

    public static function save_new()
    {
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('order_data', unserialize($order->data));
        Session::flash('order_id', $order->id);
    }

    public static function getOrders()
    {
        return DB::select("select u.name,o.* from orders o join users u on u.id = o.user_id order by o.created_at desc");
    }
}
