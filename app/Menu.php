<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    protected $fillable = [
        'link', 'title', 'url'
    ];

    public function contents() {
        return $this->hasMany('App\Content');
    }

}
