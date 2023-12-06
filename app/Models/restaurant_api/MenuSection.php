<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSection extends Model
{
    use HasFactory;
    public function MenuItem(){
        return $this->hasMany('App\Models\restaurant_api\MenuItem');
    }
    public function Menu(){
        return $this->belongsTo('App\Models\restaurant_api\Menu');
    }
}

