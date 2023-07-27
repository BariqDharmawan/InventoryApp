<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProcuremenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $supplierId = Supplier::select('id')->get('id')->toArray();
        $productName = array_unique(Product::select('name')->get('name')->toArray());

        return [
            'title' => fake()->word(10),
            'description' => fake()->paragraph(5),
            'category' => fake()->word(10),
            'qty' => rand(100, 1000),
            'price' => fake()->numberBetween(1000000, 100000000),
            'contract_supplier_id' => fake()->randomElement($supplierId),
            'product_id' => fake()->randomElement($productName),
            'approved_at' => fake()->dateTimeBetween('-30 days', 'now'),
            'approved_by' => fake()->randomElement(User::where('is_active', true)->select('id')->get('id')->toArray())
        ];
    }
}
