<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'coupon_id',
        'order_date',
        'total_price',
        'shipping_address',
        'tracking_number',
        'delivered_at',
        'status',
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'orders';

    /** Relations table is: users, coupons
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function coupon(): BelongsTo
    {
        return $this->belongsTo(Coupon::class, 'coupon_id', 'id');
    }

    /** Relations table is: payments, order_items
     * @return HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Query Scopes
     */
    /**
     * Accessors
     */
    /**
     * Mutators
     */
    /**
     * Events
     */
    /**
     * Custom Methods
     */
    /**
     * Static Methods
     */

    /** Auto generate tracking number */
    protected static function boot(){
        parent::boot();

        static::crateing(function($order){
            $order->tracking_number = 'ORD-'. now()->format('Ymd').'-'.strtoupper(Str::random(6));
        });
    }
}
