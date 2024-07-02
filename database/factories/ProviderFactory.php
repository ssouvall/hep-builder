<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    protected $model = Provider::class;

    public function definition()
    {
        return [];
    }

    public function configure()
    {
        return $this->afterCreating(function (Provider $provider) {
            $user = \App\Models\User::factory()->create();
            $provider->user()->associate($user);
            $provider->save();
        });
    }

    public function withPatients()
    {
        return $this->afterCreating(function (Provider $provider) {
            $patients = \App\Models\Patient::factory(rand(1, 3))->create();
            $provider->patients()->attach($patients->pluck('id')->toArray());
        });
    }
}
