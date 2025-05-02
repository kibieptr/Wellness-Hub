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
    // database/migrations/2024_01_01_000005_create_sessions_table.php
    Schema::create('sessions', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->datetime('available_at');
        $table->foreignId('therapist_id')->constrained('users')->onDelete('cascade');
        $table->decimal('price', 10, 2);
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
