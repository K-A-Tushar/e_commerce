<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'icon',
        'description',
    ];
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'categories';

    /** Relations table is:
     * @return BelongsTo
     */

    /** Relations table is: products, subcategories
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
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
