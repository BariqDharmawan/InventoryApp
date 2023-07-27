<?php

namespace Database\Seeders;

use App\Models\Procurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Procurement::factory()->count(50)->create();
    }
}
