<?php

namespace Database\Factories;

use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContractSupplier>
 */
class ContractSupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('-10 months', 'now');
        $endDate = new Carbon($startDate);

        return [
            'title' => fake()->sentence(10),
            'contract_value' => fake()->numberBetween(10000000, 500000000),
            'supplier_id' => Supplier::factory(),
            'description' => fake()->paragraph(10),
            'start_date' => $startDate,
            'end_date' => $endDate->addDays(rand(1, 10)),
        ];
    }
}
