<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'tanggal' => fake()->date(),
            'penjualan' => rand(10, 999),
            'customer' => fake()->sentence(10),
            'invoice' => fake()->word(10)
        ];
    }
}
