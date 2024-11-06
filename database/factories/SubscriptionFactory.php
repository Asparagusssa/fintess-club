<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;

    public function definition(): array
    {
        return [
            'name' => fake('ru')->name(),
            'description' => fake('ru')->sentence(),
            'price' => fake()->numberBetween(100, 1000),
            'duration' => 30,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
