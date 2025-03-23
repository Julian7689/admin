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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('ranking_id')->nullable()->constrained('rankings')->onDelete('set null');
            $table->foreignId('challenge_id')->nullable()->constrained('challenges')->onDelete('set null');
            $table->string('tittle');
            $table->text('description')->nullable();
            $table->enum('status', ['Pending', 'In Progress', 'Completed']);
            $table->date('date_created');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
