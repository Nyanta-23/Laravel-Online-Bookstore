<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => mt_rand(10, 100),
            'price' => mt_rand(100000, 1000000)/10,
            'order_id' => Order::factory(),
            'book_id' => Book::factory()
        ];
    }
}
