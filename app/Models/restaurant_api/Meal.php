<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    //public $table = "meals";
    protected $fillable=['id','table_seatId','orderId'];
    
    public function TableSeat(){
        return $this->belongsTo('App\Models\restaurant_api\TableSeat');
    }
    public function MealItem(){
        return $this->hasMany('App\Models\restaurant_api\MealItem');
    }
    public function Order(){
        return $this->belongsTo('App\Models\restaurant_api\Order');
    }
} 
