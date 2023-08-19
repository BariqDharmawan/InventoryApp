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
        $procurements = Procurement::with('user')->get();
        $products = Product::all();

        return view('pages.procurement.index', [
            'ths' => [
                'Tanggal Aktivitas', 'Supplier', 'QTY', 'Nama Pengadaan', 'Detail'
            ],
            'products' => $products,
            'procurements' => $procurements,
            'suppliers' => Supplier::all(),
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
            'description' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price,
            'users_id' => auth()->id(),
        ]);

        foreach ($request->product_id as $productId) {
            ProcurementProduct::create([
                'product_id' => $productId,
                'procurements_id' => $procurement->id
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
