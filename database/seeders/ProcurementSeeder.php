<?php

namespace Database\Seeders;

use App\Models\Procurement;
use App\Models\ProcurementProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Procurement::factory()->has(ProcurementProduct::factory()->count(2))->count(50)->create();
    }
}
