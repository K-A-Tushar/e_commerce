<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    protected $fillable = [
        'canview', 'canadd', 'canedit', 'candelete', 'canprint', 
        'canexport', 'canlist', 'canimport', 'canapprove', 
        'canreject', 'canverify', 'slug'
    ];

    protected $guarded = ['id'];
    protected $table = 'permissions';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}

