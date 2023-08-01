<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\Procurement;
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
        $ths = ['Nama Produk',  'Tanggal Aktivitas', 'QTY', 'Nama Pengadaan', 'Admin Pengontrol', 'Status Pengadaan', 'Supplier'];

        $procurements = Procurement::with('user')->get();
        $flowIn = StockFlow::with(['product', 'procurement'])->where('type', 'masuk')->get();
        $flowOut = StockFlow::with(['procurement', 'product'])->where('type', 'keluar')->get();

        $typeStock = StockFlow::TYPE_FLOW;

        $products = Product::all();

        return view('pages.procurement.index', [
            'ths' => $ths,
            'procurements' => $procurements,
            'typeStock' => $typeStock,
            'products' => $products,
            'suppliers' => Supplier::all(),
            'procurementStatus' => Procurement::STATUS,
            'flowIn' => $flowIn,
            'flowOut' => $flowOut,
        ]);
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
        $procurement = Procurement::create([
            'title' => $request->title,
            'description' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price,
            'contract_supplier_id' => $request->contract_supplier_id,
            'product_id' => $request->product_id,
            'action_at' => $request->date,
            'status' => $request->status,
            'users_id' => auth()->id(),
        ]);

        for ($i = 0; $i < (int)$request->qty; $i++) {
            $productItem = new ProductItem;
            $productItem->saveProductItem($productItem, $request);

            StockFlow::create([
                'product_id' => $request->product_id,
                'type' => $request->type,
                'date' => $request->date,
                'qty' => $request->qty,
                'procurement_id' => $procurement->id
            ]);
        }

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
