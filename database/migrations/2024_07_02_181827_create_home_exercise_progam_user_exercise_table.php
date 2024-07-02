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
        Schema::create('home_exercise_progam_user_exercise', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_exercise_program_id');
            $table->foreign('home_exercise_program_id', 'fk_home_prog_user_prog_id')  // Specify a shorter name here
                  ->references('id')
                  ->on('home_exercise_programs')
                  ->onDelete('cascade');
            
            $table->unsignedBigInteger('user_exercise_id');
            $table->foreign('user_exercise_id', 'fk_home_prog_user_exercise_id')  // Specify a shorter name here
                  ->references('id')
                  ->on('user_exercises')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_exercise_progam_user_exercise');
    }
};
