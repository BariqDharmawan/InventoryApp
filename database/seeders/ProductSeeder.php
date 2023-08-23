<?php

namespace Database\Seeders;

use App\Models\Peramalan;
use App\Models\Procurement;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->count(50)->create();
    }
}
