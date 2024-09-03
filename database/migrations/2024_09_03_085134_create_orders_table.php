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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('status', ['failed', 'progress', 'packing', 'sending', 'complete']);
            $table->foreignId('book_id')->constrained(
                table: 'books',
                indexName: 'order_book_id',
            );
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'order_user_id',
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
