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
        $name = fake()->sentence(5);
        return [
            'id' => 'IA' . Str::random(5),
            'name' => fake()->sentence(5),
            'unit' => fake()->randomElement(Product::UNIT),
            'supplier_id' => Supplier::factory()
        ];
    }
}
