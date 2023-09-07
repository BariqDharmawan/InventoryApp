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
            'price' => fake()->numberBetween(1000000, 100000000),
            'users_id' => fake()->randomElement(User::where('role', 'qc')->get()->pluck('id')->toArray()),
            'supplier_id' => fake()->randomElement(Supplier::all()->pluck('id')->toArray()),
            'action_at' => fake()->randomElement(['2023-01-10 00:00:00', '2023-04-17 00:00:00', '2023-07-17 00:00:00', '2023-10-17 00:00:00'])
        ];
    }

    public function ongoing(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'ongoing'
            ];
        });
    }
}
