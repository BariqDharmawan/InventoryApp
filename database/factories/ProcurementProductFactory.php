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
            'action_at' => fake()->randomElement(['2023-01-10 00:00:00', '2023-04-17 00:00:00', '2023-07-17 00:00:00', '2023-10-17 00:00:00']),
            'product_id' => fake()->randomElement(Product::all()->pluck('kode_barang')->toArray())
        ];
    }
}
