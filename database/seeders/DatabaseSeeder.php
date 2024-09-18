<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Nyanta',
            'username' => 'nyanta123',
            'email' => 'nyanta123@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'User',
            'username' => 'user123',
            'email' => 'user123@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);

        $this->call([CategorySeeder::class, AuthorSeeder::class]);

        Book::factory(5)->recycle(
            [Category::all(), Author::all()]
            )->create();

        Order::factory(20)->recycle(User::factory(5)->create())->create();
        
        OrderItem::factory(59)->recycle(
            [Book::all(), Order::all()]
        )->create();

        Cart::factory(20)->recycle(
            [Book::all(), 
            User::all()])->create();
    }
}
