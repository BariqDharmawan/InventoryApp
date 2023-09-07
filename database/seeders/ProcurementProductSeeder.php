<?php

namespace Database\Seeders;

use App\Models\ProcurementProduct;
use Illuminate\Database\Seeder;

class ProcurementProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProcurementProduct::factory()->count(100)->create();
    }
}
