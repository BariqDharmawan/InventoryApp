<?php

use App\Http\Controllers\ContractSupplierController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('stock-flow', [ProductController::class, 'stockFlow'])->name('products.stock-flow');
    Route::get('products/stock-prediction/{id}', [ProductController::class, 'stockPrediction'])->name('products.stock-prediction');
    Route::resource('product-item', ProductItemController::class);
    Route::resource('products', ProductController::class)->except('destroy');
    Route::resource('procurement', ProcurementController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('contract-supplier', ContractSupplierController::class);
    Route::resource('admin', AdminController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
