<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\Peramalan;
use App\Models\Penjualan;
use Illuminate\Console\Command;

class CreatePeramalan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-peramalan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Peramalan';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // alpha constant value
        $alpha  = 0.4;

        // get last 12 months date
        $startDate = now();
        $startDate->subMonth(12)->startOfMonth();
        $endDate = now()->startOfMonth();

        // product codes
        $productCodes = Product::pluck('kode_barang')->toArray();

        // get data
        $data = Penjualan::selectRaw('DATE_FORMAT(tanggal, "%Y-%m") as month')
            ->selectRaw('SUM(penjualan) as total_penjualan')
            ->selectRaw('product_id as product_code')
            ->whereBetween('tanggal', [$startDate, $endDate])
            ->groupBy('month', 'product_code')
            ->get();

        // dd($data->pluck('product_code'));

        // fill empty data
        for ($i=0; $i < 12; $i++) { 
            $endDate->subMonth(1);
            $month = $endDate->format('Y-m');
            foreach($productCodes as $code) {
                if ($data->where('month', $month)->where('product_code', $code)->count() == 0) {
                    $data->push([
                        'month' => $month,
                        'total_penjualan'=>1,
                        'product_code' => $code
                    ]);
                }
            }
        }
        $data = $data->sortBy('month', SORT_NATURAL)->groupBy('product_code')->toArray();
        $result = [];

        // calculate predictions
        foreach($data as $code => $items) {
            for ($i=0; $i < count($items); $i++) { 
                $data[$code][$i]['total_penjualan'] = (int) $data[$code][$i]['total_penjualan'];
                if ($i == 0) {
                    $data[$code][$i]['peramalan'] = 1;
                    continue;
                }
                $data[$code][$i]['peramalan'] = (int) ceil(
                    ($data[$code][$i-1]['total_penjualan'] * $alpha)
                    +
                    ($data[$code][$i-1]['peramalan'] * (1-$alpha))
                );
                if ($i == 11) {
                    $result[] = [
                        "peramalan" => $data[$code][$i]["peramalan"],
                        "product_code" => $data[$code][$i]["product_code"],
                        "created_at" => now(),
                        "updated_at" => now()
                    ];
                }
            }
        }

        Peramalan::truncate();
        Peramalan::insert($result);
    }
}
