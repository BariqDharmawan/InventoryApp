<?php

namespace App\Http\Controllers;

use App\Models\LogStock;
use App\Models\Penjualan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Penjualan::with('product')->latest('tanggal')->get();
        $products = Product::orderBy('name', 'asc')->get();

        return view('pages.penjualan.index', ['sales' => $sales, 'products' => $products, 'ths' => [
            'tanggal',
            'nama barang',
            'penjualan',
            'customer'
        ]]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productToSell = Product::findOrFail($request->product_id);
        $productToSell->qty = $productToSell->qty - $request->penjualan;
        $productToSell->save();

        $actionAt = $request->has('tanggal') ? $request->tanggal : now();

        $penjualan = Penjualan::create([
            'tanggal' => $actionAt,
            'product_id' => $request->product_id,
            'penjualan' => $request->penjualan,
            'customer' => $request->customer,
            'invoice' => 'IV' . Str::random(10)
        ]);

        LogStock::create([
            'type_log' => 'penjualan',
            'activity_id' => $penjualan->id,
            'product_id' => $request->product_id,
            'activity_desc' => "Penjualan Barang Dengan Kode $productToSell->kode_barang sebanyak $request->penjualan qty",
            'action_at' => $actionAt
        ]);

        Artisan::call('app:create-peramalan');

        return redirect()->back()->with('success', "Berhasil menambah penjualan $penjualan->product->kode_barang");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Penjualan::findOrFail($id);
        return view('pages.penjualan.detail', ['sale' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
