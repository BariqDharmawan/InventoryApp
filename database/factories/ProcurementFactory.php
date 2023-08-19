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
            'description' => fake()->paragraph(5),
            'qty' => rand(100, 1000),
            'price' => fake()->numberBetween(1000000, 100000000),
            'users_id' => User::factory()
        ];
    }
}
