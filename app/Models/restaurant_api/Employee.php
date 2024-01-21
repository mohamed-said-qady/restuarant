<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['dataJoined','name','phone','branch_id','order_id','reservation_id'];
    public function Branch(){
        return $this->belongsTo('App\Models\restaurant_api\Branch');
    }
    public function Kitchen(){
        return $this->belongsTo('App\Models\restaurant_api\Kitchen');
    }
    public function Order(){
        return $this->hasMany('App\Models\restaurant_api\Order');
    }
    public function Reservation(){
        return $this->hasMany('App\Models\restaurant_api\Reservation');
    }

}
