<?php

namespace Database\Seeders;

use App\Models\StockFlow;
use Illuminate\Database\Seeder;

class StockFlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StockFlow::factory()->count(50)->create();
    }
}
