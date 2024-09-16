<?php

namespace Database\Factories;

use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'description' => fake()->text(100),
            'status' => fake()->randomElement(['failed', 'packing', 'sending', 'complete']),
            'user_id' => User::factory(),
            'total_price' => mt_rand(100000, 1000000)
        ];
    }
}
