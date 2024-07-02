<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::factory()->count(10)->withProviders()->create();
    }
}

