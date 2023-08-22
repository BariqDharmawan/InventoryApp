<?php

namespace Database\Factories;

use App\Models\Penjualan;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    public function definition(): array
    {
        $penjualan = new Penjualan();
        $dummyQTYPenjualan = $penjualan->dummyQTYPenjualan();

        return [
            'product_id' => Product::factory(),
            'tanggal' => fake()->date(),
            'penjualan' => $dummyQTYPenjualan,
            'customer' => fake()->sentence(10),
            'invoice' => fake()->word(10)
        ];
    }
}
