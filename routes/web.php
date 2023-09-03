<?php

use App\Http\Controllers\ContractSupplierController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StockFlowController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('products/stock-flow', [ProductController::class, 'logStock'])->name('products.log');
    Route::patch('admin/{user}/password', [AdminController::class, 'resetPassword'])->name('admin.resetPassword');
    Route::resource('products', ProductController::class);
    Route::put('procurement/{procurement}/make-done', [ProcurementController::class, 'makeDone'])->name('procurement.done');
    Route::get('procurement/plan/{triwulanYear}/{triwulanMonth}', [ProcurementController::class, 'plan'])->name('procurement.plan');
    Route::get('procurement/do/{triwulanYear}/{triwulanMonth}', [ProcurementController::class, 'do'])->name('procurement.do');
    Route::get('procurement/check/{triwulanYear}/{triwulanMonth}', [ProcurementController::class, 'check'])->name('procurement.check');
    Route::get('procurement/action/{triwulanYear}/{triwulanMonth}', [ProcurementController::class, 'action'])->name('procurement.action');
    Route::resource('procurement', ProcurementController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('contract-supplier', ContractSupplierController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('penjualan', PenjualanController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/generate-peramalan', [ProductController::class, 'peramalan'])->name('product.pramalan.generate');

require __DIR__ . '/auth.php';
