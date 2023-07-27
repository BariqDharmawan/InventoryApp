<?php

namespace Database\Factories;

use App\Models\Product;
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
        return [
            'name' => fake()->word(5),
            'kode_barang' => 'IA' . strtoupper(Str::random(5)),
            'unit' => fake()->randomElement(Product::UNIT),
            'description' => fake()->paragraph(10),
        ];
    }
}
