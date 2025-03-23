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
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->enum('Estado', ['activo', 'inactivo'])->default('activo');
            $table->enum('Dificultad', ['fácil', 'medio', 'difícil'])->default('medio');
            $table->integer('Puntos');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};
