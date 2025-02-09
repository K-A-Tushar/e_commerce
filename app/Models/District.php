<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $fillable = [
        'division_id',
        'name',
        'slug',
        'bn_name',
        'bn_slug',
    ];
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'districts';
    /**
     * @return BelongsTo
     */
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
