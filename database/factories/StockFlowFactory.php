<?php

namespace Database\Factories;

use App\Models\Procurement;
use App\Models\Product;
use App\Models\StockFlow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockFlow>
 */
class StockFlowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'type' => fake()->randomElement(StockFlow::TYPE_FLOW),
            'date' => fake()->dateTimeBetween('-' . rand(1, 5) . ' week', 'now'),
            'qty' => rand(100, 1000),
            'procurement_id' => Procurement::factory(),
        ];
    }
}
