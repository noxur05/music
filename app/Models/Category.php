<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function music(): HasMany
    {
        return $this->hasMany(Music::class);
    }
}
