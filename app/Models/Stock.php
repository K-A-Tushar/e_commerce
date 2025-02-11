<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'dealer_price',
        'wholesale_price',
        'retail_price',
        'reserved',
        'sold',
        'returned',
        'damaged',
        'location',
        'batch_number',
        'expiry_date',
        'status',
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'stocks';
        /** Relations
     * @return HasMany
     */
    /**
     * @return BelongsTo
     * table is: products, users
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
