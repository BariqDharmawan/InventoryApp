<?php

use App\Models\Penjualan;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('peramalan', function (Request $request) {
    $alpha = 0.4;
    $month = '02';

    $product = Product::with(['peramalan', 'penjualan' => function ($query) use ($month) {
        $query->whereMonth('tanggal', $month);
    }])->find($request->product_id);

    $previousForecast = null;

    foreach ($product->penjualan as $index => $penjualan) {
        if ($index > 0) {
            $previousForecast = $product->peramalan[$index - 1]->jumlah_peramalan;
            $actualDemand = $penjualan->penjualan;
            $forecast = $previousForecast + $alpha * ($actualDemand - $previousForecast);
            $product->peramalan[$index]->jumlah_peramalan = $forecast;
        }
    }

    $data = [
        'productId' => $request->product_id,
        'val' => 20,
        'product' => $product,
        'penjualanByProduct' => $product
    ];

    return response()->json($data);
})->name('peramalan');
