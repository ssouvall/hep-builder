<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'instructions' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'isPrivate' => $this->faker->boolean(),
        ];
    }
}