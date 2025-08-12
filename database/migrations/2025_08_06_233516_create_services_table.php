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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->json('images')->nullable(); // Store multiple images
            $table->json('features')->nullable(); // Service features/benefits
            $table->decimal('starting_price', 8, 2)->nullable();
            $table->string('price_unit')->nullable(); // per sq ft, per project, etc.
            $table->integer('estimated_duration')->nullable(); // in days
            $table->string('category')->nullable(); // residential, commercial, etc.
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->string('icon')->nullable(); // For service icons
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
