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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('quote_number')->unique();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('customer_address');
            $table->enum('service_type', ['roof_repair', 'roof_replacement', 'roof_installation', 'roof_inspection', 'gutter_services', 'emergency_repair']);
            $table->enum('roof_type', ['asphalt_shingles', 'metal', 'tile', 'slate', 'flat', 'other'])->nullable();
            $table->decimal('estimated_area', 8, 2)->nullable();
            $table->text('description');
            $table->text('special_requirements')->nullable();
            $table->decimal('estimated_cost', 10, 2)->nullable();
            $table->enum('status', ['pending', 'reviewed', 'quoted', 'accepted', 'rejected'])->default('pending');
            $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium');
            $table->date('preferred_start_date')->nullable();
            $table->json('attachments')->nullable(); // Store file paths
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
