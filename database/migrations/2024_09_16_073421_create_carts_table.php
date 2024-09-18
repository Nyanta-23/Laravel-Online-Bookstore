<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained(
                table: 'books',
                indexName: 'carts_book_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'carts_user_id'
            );
            $table->integer('quantity');
            $table->string('name');
            $table->double('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
