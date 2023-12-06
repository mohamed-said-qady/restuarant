<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'restuarantId'

    ];
    public function Restuarant(){
        return $this->belongsTo('App\Models\restaurant_api\Restuarant');
    }
    public function Employee(){
        return $this->hasMany('App\Models\restaurant_api\Employee');
    }
    public function Menu(){
        return $this->hasOne('App\Models\restaurant_api\Menu');
    }
}
