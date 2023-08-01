<?php

namespace Database\Factories;

use App\Models\ContractSupplier;
use App\Models\Procurement;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProcurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(10),
            'description' => fake()->paragraph(5),
            'qty' => rand(100, 1000),
            'price' => fake()->numberBetween(1000000, 100000000),
            'contract_supplier_id' => ContractSupplier::factory(),
            'product_id' => Product::factory(),
            'action_at' => fake()->dateTimeBetween('-30 days', 'now'),
            'status' => fake()->randomElement(Procurement::STATUS),
            'users_id' => User::factory()
        ];
    }
}
