<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    protected $fillable = [
        'user_id',
        'vendor_code',
        'shop_name',
        'shop_address',
        'shop_description',
        'shop_phone',   
        'shop_email',
        'logo',
        'tax_number',
        'tax_certificate',
        'vat_registration',
        'total_sales',
        'balance',
        'withdrawable_balance',
        'status',
        'rating',
        'total_reviews'
    ];
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'vendors';
    
    /** Relations table is: users
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** Relations table is: products
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
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
