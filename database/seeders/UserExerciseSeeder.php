<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserExercise;

class UserExerciseSeeder extends Seeder
{
    public function run()
    {
        UserExercise::factory()->count(50)->create();
    }
}
