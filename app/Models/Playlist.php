<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function playlistUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_playlist');
    }


    public function playlistMusic(): BelongsToMany
    {
        return $this->belongsToMany(Music::class, 'playlist_music');
    }
}
