<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeramalanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'jumlah_peramalan' => rand(1, 200),
            'month' => fake()->randomElement([
                '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'
            ]),
        ];
    }
}
