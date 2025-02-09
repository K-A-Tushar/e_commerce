<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'coupon_code',
        'order_date',
        'total_price',
        'shipping_address',
        'tracking_number',
        'delivered_at',
        'status',
    ];
    protected static function boot(){
        parent::boot();

        static::crateing(function($order){
            $order->tracking_number = 'ORD-'. now()->format('Ymd').'-'.strtoupper(Str::random(6));
        });
    }
}
