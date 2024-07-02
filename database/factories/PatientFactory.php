<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [];
    }

    public function configure()
    {
        return $this->afterCreating(function (Patient $patient) {
            $user = \App\Models\User::factory()->create();
            $patient->user()->associate($user);
            $patient->save();
        });
    }

    public function withProviders()
    {
        return $this->afterCreating(function (Patient $patient) {
            $providers = \App\Models\Provider::factory(rand(1, 3))->create();
            $patient->providers()->attach($providers->pluck('id')->toArray());
        });
    }
}
