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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('photos')->nullable(); 
            $table->string('title', 120)->notNullable(); 
            $table->enum('difficulty', ['Easy', 'Medium', 'Hard'])->default('Medium')->notNullable(); 
            $table->string('description', 250)->notNullable(); // 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
