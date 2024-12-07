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
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Chave primária auto_increment
            $table->enum('type', ['Advanced', 'Medium', 'Beginner'])->notNullable();
            $table->string('title', 120)->notNullable();
            $table->enum('state', ['active', 'hidden'])->default('hidden')->notNullable();
            $table->string('location', 120)->notNullable(); 
            $table->date('date')->notNullable();
            $table->integer('duration')->notNullable();
            $table->unsignedBigInteger('sports_id');
            $table->foreign('sports_id')->references('id')->on('sports')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
