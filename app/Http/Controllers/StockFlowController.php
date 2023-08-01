<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use Illuminate\Http\Request;

class StockFlowController extends Controller
{

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
        StockFlow::create([
            'product_id' => $request->product_id,
            'type' => $request->type,
            'date' => $request->date,
            'qty' => $request->qty,
            'procurement_id' => $request->procurement_id
        ]);

        return redirect()->back()->with(
            'success',
            'Berhasil mencatat flow untuk produk ' .
                Product::find($request->product_id)->name
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(StockFlow $stockFlow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockFlow $stockFlow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StockFlow $stockFlow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockFlow $stockFlow)
    {
        //
    }
}
