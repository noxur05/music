<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Category;
use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $album = Album::inRandomOrder()->first();

        return [
            'category_id' => $category->id,
            'artist_id' => $album->artist_id,
            'album_id' => $album->id,
            'name' => fake()->streetName(),
            'slug' => str()->random(5),
            'views' => fake()->numberBetween(50, 100),
            'downloads' => fake()->numberBetween(25, 50),
            'favorites' => fake()->numberBetween(0, 25),
        ];
    }


    public function configure(): static
    {
        return $this->afterMaking(function (Music $music) {
            // ...
        })->afterCreating(function (Music $music) {
            $music->slug = str($music->name)->slug() . '-' . $music->id;
            $music->update();
        });
    }
}
