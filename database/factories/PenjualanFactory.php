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
        $date->year(fake()->randomElement([2023, 2022]));

        if ($date->year == now()->year) {
            $date->month(random_int(1, now()->month));
        }

        return [
            'product_id' => fake()->randomElement(Product::all()->pluck('kode_barang')->toArray()),
            'tanggal' => $date,
            'penjualan' => $dummyQTYPenjualan,
            'customer' => fake()->randomElement([
                'SEKRETARIAT DAERAH - TAMBRAUW',
                'DEPAG KAB. SORONG',
                'BANK PAPUA AIMAS',
                'PT. ANJ',
                'KPP PRATAMA KOTA SORONG',
                'LILING DIGITAL PRINTING',
                'RS. SELEBESOLU',
                'SD INPRES SORONG',
                'BLK KOTA SORONG',
                'PERCETAKAN ADORA SORONG 3'
            ]),
            'invoice' => fake()->word(10)
        ];
    }
}
