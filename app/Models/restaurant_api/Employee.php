<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function Branch(){
        return $this->belongsTo('App\Models\restaurant_api\Branch');
    }
}
