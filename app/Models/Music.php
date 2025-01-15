<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Music extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }


    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }


    public function musicPlaylists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class, 'playlist_music');
    }
}
