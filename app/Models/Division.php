<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
     use HasFactory;
     protected $fillable = [
        'name',
        'code',
        'slug',
        'bn_name',
        'bn_slug',
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'divisions';
        /** Relations
     * @return HasMany
     */
    /**
     * @return BelongsTo
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
