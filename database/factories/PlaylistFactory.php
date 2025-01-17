<?php

namespace Database\Factories;

use App\Models\Playlist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playlist>
 */
class PlaylistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->streetName(),
            'slug' => str()->random(5),
        ];
    }


    public function configure(): static
    {
        return $this->afterMaking(function (Playlist $playlist) {
            // ...
        })->afterCreating(function (Playlist $playlist) {
            $playlist->slug = str($playlist->name)->slug() . '-' . $playlist->id;
            $playlist->update();
        });
    }
}
