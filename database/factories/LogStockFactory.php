<?php

namespace Database\Factories;

use App\Models\Penjualan;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LogStock>
 */
class LogStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $penjualan = new Penjualan();
        $dummyQTYPenjualan = $penjualan->dummyQTYPenjualan();

        return [
            'product_id' => fake()->randomElement(Product::all()->pluck('kode_barang')->toArray()),
            'type_log' => 'penjualan',
            'activity_id' => fake()->randomElement(Penjualan::all()->pluck('id')->toArray()),
            'activity_desc' => function (array $attributes) use ($dummyQTYPenjualan) {
                return "Penjualan Barang Dengan Kode " .
                    Product::find($attributes['product_id'])->kode_barang . " sebanyak " . $dummyQTYPenjualan . " qty";
            },
            'action_at' => now()
        ];
    }
}
