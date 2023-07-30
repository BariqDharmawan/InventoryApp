<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductItem>
 */
class ProductItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_barang' => 'IA' . Str::random(10),
            'description' => fake()->paragraph(),
            'product_name' => Product::factory(),
        ];
    }

    public function deleted(): Factory {
        return $this->state(function (array $attributes) {
            return [
                'deleted_at' => Carbon::now()
            ];
        });
    }
}
