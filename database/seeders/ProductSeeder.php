<?php

namespace Database\Seeders;

use App\Models\Procurement;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->has(
            ProductItem::factory()->count(3)
        )
            // ->has(
            //     Procurement::factory()->count(rand(2, 10))
            // )
            ->count(5)->create();
    }
}
