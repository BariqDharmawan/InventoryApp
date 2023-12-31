<?php

namespace Database\Seeders;

use App\Models\LogStock;
use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::factory()->count(50)->create();
        LogStock::factory()->count(50)->create();

        Artisan::call('app:create-peramalan');
    }
}
