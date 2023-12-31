<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $qty = rand(100000, 1000000);

        return [
            'kode_barang' => 'IA' . Str::random(5),
            'name' => fake()->sentence(5),
            'unit' => fake()->randomElement(Product::UNIT),
            'harga_satuan' => rand(100000, 1000000),
            'qty' => $qty,
            'max_capacity' => $qty + rand(100, 1000),
        ];
    }
}
