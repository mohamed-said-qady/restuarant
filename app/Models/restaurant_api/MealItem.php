<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealItem extends Model
{
    use HasFactory;
    public function Meal(){
        return $this->belongsTo('App\Models\restaurant_api\Meal');
    }
    public function MenuSection(){
        return $this->belongsTo('App\Models\restaurant_api\MenuSection');
    }
}
