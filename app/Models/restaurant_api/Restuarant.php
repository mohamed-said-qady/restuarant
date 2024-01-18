<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restuarant extends Model
{
    use HasFactory;
    protected $fillable=['name',]; 
}
