<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeExerciseProgram;

class HomeExerciseProgramSeeder extends Seeder
{
    public function run()
    {
        HomeExerciseProgram::factory()->count(10)->create();
    }
}

