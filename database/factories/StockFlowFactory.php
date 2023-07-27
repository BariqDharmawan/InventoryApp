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
        $productName = array_unique(Product::select('name')->get('name')->toArray());
        $procurementId = Procurement::whereNull('rejected_at')->select('id')->toArray();
        dd($productName);

        return [
            'product_id' => $productName,
            'type' => fake()->randomElement(StockFlow::TYPE_FLOW),
            'date' => fake()->dateTimeBetween('-' . rand(1, 5) . ' week', 'now'),
            'qty' => rand(100, 1000),
            'procurement_id' => fake()->randomElement($procurementId),
        ];
    }
}
