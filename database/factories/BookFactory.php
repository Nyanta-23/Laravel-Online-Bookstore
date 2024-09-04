<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3, false),
            'slug' => fake()->slug(),
            'synopsis' => fake()->paragraph(4, false),
            'price' => round(rand(50000,1000000)),
            'stock' => round(rand(50,200)),
            'author_id' => Author::factory(),
            'category_id' => Category::factory()
        ];
    }
}
