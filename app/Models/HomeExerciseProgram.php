<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeExerciseProgram extends Model
{
    use HasFactory;

    public function userExercises()
    {
        return $this->belongsToMany(UserExercise::class, 'home_exercise_program_user_exercise', 'home_exercise_program_id', 'user_exercise_id');
    }
}
