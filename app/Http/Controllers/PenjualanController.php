<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Penjualan::with('product')->get();

        return view('pages.penjualan.index', ['sales' => $sales, 'ths' => [
            'tanggal',
            'kode barang',
            'penjualan',
            'harga',
            'customer',
            'invoice'
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
        Penjualan::create([
            'tanggal' => $request->tanggal,
            'product_id' => $request->product_id,
            'penjualan' => $request->penjualan,
            'harga' => $request->harga,
            'customer' => $request->customer,
            'invoice' => 'IV' . Str::random(10)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Penjualan::findOrFail($id);
        return view('pages.penjualan.detail', ['penjualan' => $sale]);
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
