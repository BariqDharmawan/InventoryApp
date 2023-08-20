<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\Procurement;
use App\Models\ProcurementProduct;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procurements = Procurement::with([
            'user', 'procurementProducts', 'supplier'
        ])->latest('action_at')->get();
        $products = Product::all();

        return view('pages.procurement.index', [
            'ths' => [
                'Tanggal Aktivitas', 'Supplier', 'QTY', 'Detail'
            ],
            'products' => $products,
            'procurements' => $procurements,
            'suppliers' => Supplier::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $procurement = Procurement::create([
            'supplier_id' => $request->supplier_id,
            'description' => $request->description,
            'users_id' => auth()->id(),
            'price' => 0,
            'action_at' => $request->action_at
        ]);

        $priceProductSelected = [];
        foreach ($request->product_id as $index => $productId) {
            ProcurementProduct::create([
                'product_id' => $productId,
                'procurement_id' => $procurement->id
            ]);

            $product = Product::where('kode_barang', $request->product_id)->first();

            $product->qty = $product->qty + $request->qty_selected_product[$index];
            $product->save();

            $priceProductSelected[] = $product->harga_satuan;
        }

        $procurement->update([
            'price' => array_sum($priceProductSelected)
        ]);

        return redirect()->back()->with('success', 'Berhasil mencatat pengadaan ' . $request->title);
    }

    /**
     * Display the specified resource.
     */
    public function show(Procurement $procurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procurement $procurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procurement $procurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procurement $procurement)
    {
        //
    }
}
