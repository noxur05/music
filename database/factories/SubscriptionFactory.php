<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startsAt = fake()->dateTimeBetween('-3 months', 'now');
        return [
            'starts_at' => $startsAt,
            'ends_at' => Carbon::parse($startsAt)->addMonths(fake()->numberBetween(1, 3)),
        ];
    }
}
