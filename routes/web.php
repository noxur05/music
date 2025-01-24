<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');

        Route::get('category/{slug}', 'category')
            ->where('slug', '[a-z-]+')->name('category');

        Route::get('artist/{id}', 'artist')
            ->where('id', '[0-9]+')->name('artist');

        Route::get('album/{id}', 'album')
            ->where('id', '[0-9]+')->name('album');

        Route::get('playlist/{slug}', 'playlist')
            ->where('slug', '[a-z0-9-]+')->name('playlist');
    });

