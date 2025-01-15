<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function music(): HasMany
    {
        return $this->hasMany(Music::class);
    }


    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
