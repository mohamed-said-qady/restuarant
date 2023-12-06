<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function MenuSection(){
        return $this->hasMany('App\Models\restaurant_api\MenuSection');
    }
    public function Branch(){
        return $this->hasOne('App\Models\restaurant_api\Branch');
    }
}
