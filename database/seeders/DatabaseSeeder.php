<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ExerciseSeeder::class,
            UserExerciseSeeder::class,
            HomeExerciseProgramSeeder::class,
            PatientSeeder::class,
            ProviderSeeder::class,
        ]);
    }
}
