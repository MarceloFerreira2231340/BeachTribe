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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('image', 255)->default('default.jpg');
            $table->text('description');
            $table->enum('type', ['Formações', 'Festivais'])->default('Festivais');
            $table->enum('state', ['ativado', 'desativado'])->default('desativado');
            $table->string('local', 50);
            $table->dateTime('date')->default('2025-01-01 19:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};


