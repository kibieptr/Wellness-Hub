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
        // database/migrations/2024_01_01_000002_create_meditations_table.php
        Schema::create('meditations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('media_url')->nullable(); // audio atau video
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meditations');
    }
};
