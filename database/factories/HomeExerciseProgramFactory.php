<?php

namespace Database\Factories;

use App\Models\HomeExerciseProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeExerciseProgramFactory extends Factory
{
    protected $model = HomeExerciseProgram::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (HomeExerciseProgram $program) {
            $userExerciseIds = \App\Models\UserExercise::factory(rand(1, 5))->create()->pluck('id')->toArray();
            $program->userExercises()->attach($userExerciseIds);
        });
    }
}
