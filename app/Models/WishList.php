<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WishList extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'wish_lists';

    /** Relations table is: users, products
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /** Relations
     * @return HasMany
     */


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
