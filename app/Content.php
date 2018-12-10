<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
       protected $fillable = [
        'menu_id', 'title', 'article'
    ];

    static public function getContents($url, &$data) {
        $data['contents'] = [];
        if ($menu = Menu::where('url', '=', $url)->first()) {
            $menu = $menu->toArray();
            $data['title'] = $menu['title'];
            if ($contents = Menu::find($menu['id'])->contents) {
                $data['contents'] = $contents->toArray();
            }
        }
    }

}
