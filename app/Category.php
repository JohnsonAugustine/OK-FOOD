<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function menus()
    {
        return $this->hasMany(Menu::class, 'category_id');
    }

    public function restaurant() {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
