<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'status',
        'table_id',
        
    ]; 
    public function Table(){
        return $this->belongsTo('App\Models\restaurant_api\Table');
    }
    public function Bill(){
        return $this->hasOne('App\Models\restaurant_api\Bill');
    }
    public function meals(){
        return $this->hasMany('App\Models\restaurant_api\Meal');
    }
    public function Employee(){
        return $this->belongsTo('App\Models\restaurant_api\Employee');
    }
}
