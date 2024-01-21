<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function Table(){
        return $this->hasMany('App\Models\restaurant_api\Table');
    }
    public function Employee(){
        return $this->belongsTo('App\Models\restaurant_api\Employee');
    }
}
