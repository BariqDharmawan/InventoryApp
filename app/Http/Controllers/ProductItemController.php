<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductItemController extends Controller
{
    private function saveProductItem($itemToSave, $request)
    {
        $itemToSave->product_id = $request->product_id;
        $itemToSave->kode_barang = 'IA' . Str::random(5);
        $itemToSave->name = $request->name;
        $itemToSave->description = $request->description;
        $itemToSave->save();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        for ($i = 0; $i < (int)$request->qty; $i++) {
            $productItem = new ProductItem;
            $productItem->saveProductItem($productItem, $request);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $productItem = ProductItem::findOrFail($id);
        $productItem->description = $request->description;
        $productItem->save();

        return redirect()->back()->with(
            'success',
            "Berhasil mengubah produk $productItem->products->name"
        );
    }

    public function destroy(string $id)
    {
        $productItem = ProductItem::findOrFail($id);
        $productItem->deleted_at = Carbon::now();
        $productItem->save();

        return redirect()->back()->with(
            'success',
            "Berhasil menghapus produk $productItem->products->name"
        );
    }
}