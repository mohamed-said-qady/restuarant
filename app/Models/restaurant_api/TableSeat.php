<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableSeat extends Model
{
    use HasFactory;
    public function Meal(){
        return $this->hasMany('App\Models\restaurant_api\Meal');
    }
    public function Table(){
        return $this->belongsTo('App\Models\restaurant_api\Table');
    }
}
