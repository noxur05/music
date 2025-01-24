<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Music;
use App\Models\Playlist;
use App\Models\Subscription;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        Artist::factory()
            ->count(10)
            ->has(Album::factory()->count(3))
            ->create();

        User::factory()
            ->count(50)
            ->has(Playlist::factory()->count(2))
            ->has(Subscription::factory()->count(1))
            ->create();

        Playlist::factory()
            ->count(50)
            ->create();

        Music::factory()
            ->count(1000)
            ->create();

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
        ]);
    }
}
