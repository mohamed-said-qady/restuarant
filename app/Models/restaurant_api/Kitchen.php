<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    public function Branch(){
        return $this->hasOne('App\Models\restaurant_api\Branch');
    }
    public function Employee(){
        return $this->hasMany('App\Models\restaurant_api\Employee');
    }
}
