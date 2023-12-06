<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public function Order(){
        return $this->hasMany('App\Models\restaurant_api\Order');
    }
    public function TableSeat(){
        return $this->hasMany('App\Models\restaurant_api\TableSeat');
    }
    public function Reservation(){
        return $this->hasMany('App\Models\restaurant_api\Reservation');
    }
}
