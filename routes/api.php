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
    $product = Product::with('peramalan')->find($request->product_id);

    $data = [
        'product' => $product,
    ];

    return response()->json($data);
})->name('peramalan');
