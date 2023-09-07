<?php

namespace Database\Seeders;

use App\Models\ContractSupplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractSupplier::factory()->count(10)->create();
    }
}
