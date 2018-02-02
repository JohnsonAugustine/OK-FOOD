<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function menu()
    {
        return $this->hasMany(Menu::class, 'restaurant_id');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
}
