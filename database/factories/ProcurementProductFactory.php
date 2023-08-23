<?php

namespace Database\Factories;

use App\Models\Procurement;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProcurementProduct>
 */
class ProcurementProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'procurement_id' => fake()->randomElement(Procurement::all()->pluck('id')->toArray()),
            'product_id' => fake()->randomElement(Product::all()->pluck('kode_barang')->toArray())
        ];
    }
}
