<?php

namespace Database\Factories;

use App\Models\Penjualan;
use App\Models\Product;
use App\Models\ProductItem;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    public function definition(): array
    {
        $penjualan = new Penjualan();
        $dummyQTYPenjualan = $penjualan->dummyQTYPenjualan();

        $date = Carbon::parse(fake()->date());
        $date->year(fake()->randomElement([2023,2022]));

        if ($date->year == now()->year) {
            $date->month(random_int(1, now()->month));
        }

        return [
            'product_id' => Product::factory(),
            'tanggal' => $date,
            'penjualan' => $dummyQTYPenjualan,
            'customer' => fake()->sentence(10),
            'invoice' => fake()->word(10)
        ];
    }
}
