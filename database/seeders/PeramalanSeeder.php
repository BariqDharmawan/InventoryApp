<?php

namespace Database\Seeders;

use App\Models\Peramalan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeramalanSeeder extends Seeder
{
    public function run(): void
    {
        Peramalan::factory()->count(50)->create();
    }
}
