<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')
            ->get();

        $artists = Artist::inRandomOrder()
            ->withCount('albums', 'music')
            ->take(4)
            ->get();

        $playlists = Playlist::whereNull('user_id')
            ->withCount('playlistMusic')
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('home.index')
            ->with([
                'categories' => $categories,
                'artists' => $artists,
                'playlists' => $playlists,
            ]);
    }


    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        $music = Music::where('category_id', $category->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return view('home.category')
            ->with([
                'category' => $category,
                'music' => $music,
            ]);
    }


    public function artist($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->increment('views');

        $music = Music::where('artist_id', $artist->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return view('home.artist')
            ->with([
                'artist' => $artist,
                'music' => $music,
            ]);
    }


    public function album($id)
    {
        $album = Album::findOrFail($id);
        $album->increment('views');

        $music = Music::where('album_id', $album->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return view('home.album')
            ->with([
                'album' => $album,
                'music' => $music,
            ]);
    }


    public function playlist($slug)
    {
        $playlist = Playlist::firstWhere('slug', $slug);
        $playlist->increment('views');

        $music = Music::whereHas('musicPlaylists', function (Builder $query) use ($playlist) {
            $query->where('id', $playlist->id);
        })
            ->orderBy('downloads', 'desc')
            ->get();

        return view('home.playlist')
            ->with([
                'playlist' => $playlist,
                'music' => $music,
            ]);
    }
}
