<?php

namespace App\Models\restaurant_api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable=[
        'amount',
        'tip',
        'tax',
        'isPaid',
        'OrderId',
        'paymentId',
    ];
    public function order(){
        return $this->hasOne('App\Models\restaurant_api\Order');
    }
    public function payment(){
        return $this->hasOne('App\Models\restaurant_api\Payment');
    }
}
