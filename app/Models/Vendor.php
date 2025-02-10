<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
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
    protected $attribute = [
        
    ];
    
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
     * string('vendor_code', 9)->unique()
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($vendor) {
            do {
                $vendor_code = strtoupper(Str::random(9));
            } while (self::where('vendor_code', $vendor_code)->exists());

            $vendor->vendor_code = $vendor_code;
        });
    }
    public static function updateVendorCode($vendor)
    {
        do {
            $vendor_code = strtoupper(Str::random(9));
        } while (self::where('vendor_code', $vendor_code)->exists());

        $vendor->vendor_code = $vendor_code;
        $vendor->save();
    }
    public function getEditableFieldsAttribute()
    {
        $filtered = collect($this->toArray())->only([
            'shop_name',
            'shop_address',
            'shop_email',
            'phone_number',
            'vendor_code',
            'status',
        ])->toArray();

        $filtered['user'] = collect($this->user)->only([
            'id',
            'name',
            'phone'
        ])->toArray();
    
        return $filtered;
        
    }

}
