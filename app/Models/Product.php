<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_id',
        'category_id',
        'subcategory_id',
        'brand_id',
        'name',
        'thumbnail',
        'slug',
        'sku',
        'barcode',
        'short_description',
        'long_description',
        'seo_title',
        'seo_description',
        'price',
        'discount_price',
        'discount_type',
        'rating',
        'reviews_count',
        'stock',
        'attributes',
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'products';

    /** Relations table is: categories, vandors, brands, subcategories
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }

    
    /** Relations table is: order_items, cart_items, wishlist, reviews, stocks
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
    public function wishlist(): HasMany
    {
        return $this->hasMany(WishList::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
    
    /**
     * Query Scopes
     */
    public function scopeFilter($query, $search)
    {
        if ($search) {
            return $query->whereHas('category', function($q) use ($search) {
                $q->where('name', 'like', "{$search}%"); // added missing semicolon
            })
            ->orWhereHas('subcategory', function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%"); // added missing semicolon
            })
            ->orWhereHas('childcategory', function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%"); // corrected the typo and added semicolon
            })
            ->orWhere('name', 'like', "%{$search}%");
        }
    }
    

    public function scopeFilterByPrice($query, $minPrice = null, $maxPrice = null)
    {
        if($minPrice !== null){
            $query->where('price','>=', $minPrice);
        }

        if($maxPrice !==null)
        {
            $query->where('price', '<=', $maxPrice);
        }

        return $query;
    }

    
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

