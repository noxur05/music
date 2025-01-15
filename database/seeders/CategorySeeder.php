<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Pop', 'Rep & Hip Hop', 'Jazz', 'Podcast', 'Classical', 'Opera', 'Piano', 'Guitar'];

        foreach ($objs as $obj) {
            Category::create(['name' => $obj]);
        }
    }
}
