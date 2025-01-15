<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }


    public function music(): HasMany
    {
        return $this->hasMany(Music::class);
    }


    public function artistUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_artist');
    }
}
