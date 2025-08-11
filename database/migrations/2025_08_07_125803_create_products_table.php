<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique(); // For friendly URLs
            $table->longText('description')->nullable();
            $table->decimal('price', 10, 2); // Price with 10 digits total, 2 after decimal
            $table->json('images')->nullable(); // Stores multiple image paths as a JSON array
            $table->foreignId('product_category_id')->nullable()->constrained()->onDelete('set null'); // Link to a categories table
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};