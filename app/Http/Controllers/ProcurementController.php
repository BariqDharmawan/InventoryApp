<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\LogStock;
use App\Models\Procurement;
use App\Models\ProcurementProduct;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Builder;
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

        $products = Product::whereHas('peramalan', function (Builder $query) {
            $query->where('peramalan', '>', 1);
        })->get();

        return view('pages.procurement.index', [
            'ths' => [
                'Tanggal Aktivitas', 'Supplier', 'QTY', 'Status', 'Detail'
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
            'status' => 'ongoing',
            'action_at' => $request->action_at
        ]);

        $priceProductSelected = [];
        foreach ($request->product_id as $index => $productId) {
            ProcurementProduct::create([
                'product_id' => $productId,
                'procurement_id' => $procurement->id
            ]);

            $product = Product::where('kode_barang', $productId)->first();

            $product->qty = $product->qty + (int)$request->qty_selected_product[$index];
            $product->save();

            $priceProductSelected[] = $product->harga_satuan;

            LogStock::create([
                'activity_id' => $procurement->id,
                'type_log' => 'procurement',
                'product_id' => $productId,
                'activity_desc' => "Pengadaan Barang Dengan Kode $product->kode_barang sebanyak" . (int)$request->qty_selected_product[$index] . " qty",
                'action_at' => $request->action_at
            ]);
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
        return view('pages.procurement.detail', ['procurement' => $procurement]);
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

    public function makeDone(Request $request, Procurement $procurement)
    {
        $procurement->update([
            'status' => $request->status,
            'users_id' => auth()->id()
        ]);

        if ($request->status === 'tidak') {
            foreach ($procurement->procurementProducts()->get() as $procurementProduct) {
                $logStock = LogStock::where('product_id', 'A015')->first();
                $logStock->delete();
            }
        }

        return redirect()->back()->with('success', "Berhasil menyelesaikan pengadaan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procurement $procurement)
    {
        //
    }
}
