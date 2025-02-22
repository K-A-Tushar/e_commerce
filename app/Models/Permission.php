<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
     use HasFactory;
     protected $fillable = [];
    
    protected $primaryKey = 'id';
    protected $table = 'permissions';
    
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
