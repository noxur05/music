<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Music;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    }


    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        $music = Music::where('category_id', $category->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return [
            'category' => $category,
            'music' => $music,
        ];
    }


    public function artist($id)
    {
        $artist = Artist::findOrFail($id);

        $music = Music::where('artist_id', $artist->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return [
            'artist' => $artist,
            'music' => $music,
        ];
    }
}
