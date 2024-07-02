<?php

namespace Database\Factories;

use App\Models\UserExercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserExerciseFactory extends Factory
{
    protected $model = UserExercise::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming there are 10 users
            'exercise_id' => $this->faker->numberBetween(1, 20), // Assuming there are 20 exercises
            'sets' => $this->faker->numberBetween(1, 5),
            'reps' => $this->faker->numberBetween(5, 20),
            'notes' => $this->faker->sentence,
        ];
    }
}
