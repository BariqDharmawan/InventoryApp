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
            'kode_barang' => function (array $attributes) {
                return Product::find($attributes['product_id'])->kode_barang;
            },
            'penjualan' => rand(10, 999),
            'harga' => rand(1000000, 100000000),
            'customer' => fake()->sentence(10),
            'invoice' => fake()->word(10)
        ];
    }
}
