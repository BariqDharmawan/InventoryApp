<?php

namespace Database\Seeders;

use App\Models\LogStock;
use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::factory()->count(10)->create();
        LogStock::factory()->count(10)->create();
    }
}
