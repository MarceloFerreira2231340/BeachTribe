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
            $table->id();
            $table->enum('type', ['A', 'M', 'B'])->default('M')->notNullable();
            $table->string('title', 120)->notNullable();
            $table->enum('state', ['A', 'H'])->default('H')->notNullable();
            $table->string('location', 120)->notNullable();
            $table->date('date')->notNullable();
            $table->string('bgtime')->notNullable();
            $table->string('endtime')->notNullable();
            $table->decimal('price', 8, 2)->default(0.00)->notNullable(); 
            $table->integer('duration')->notNullable();

            
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
