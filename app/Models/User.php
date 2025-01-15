<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }


    public function playlists(): HasMany
    {
        return $this->hasMany(Playlist::class);
    }


    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }


    public function userArtists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'user_artist');
    }


    public function userPlaylists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class, 'user_playlist');
    }
}
