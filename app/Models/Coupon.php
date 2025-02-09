<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coupon extends Model
{
    protected $fillable = [
        'name',
        'code',
        'discount',
        'type',
        'start_date',
        'end_date',
        'time_schedule',
        'usage_limit',
        'min_order_amount',
        'user_limit',
        'status',
    ];
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'coupons';

    /** Raelations table is:
     * @return BelongsTo
     */


    /** Relations table is: order
     * @return HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
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
    /**
     * Auto-generated method
     */
}
