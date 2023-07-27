<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockFlow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private function saveProduct($productToSave, $request)
    {
        if ($request->has('is_change_other_product')) {
            Product::where('name', $productToSave->name)->update([
                'kode_barang' => 'IA' . Str::random(5),
                'name' => $request->name,
                'unit' => $request->unit,
                'description' => $request->description,
            ]);
        } else {
            $productToSave->kode_barang = 'IA' . Str::random(5);
            $productToSave->name = strtolower($request->name);
            $productToSave->unit = $request->unit;
            $productToSave->description = $request->description;

            $productToSave->save();
        }
    }

    public function stockFlow()
    {
        $ths = ['Nama Produk', 'Tipe Arus', 'Qty', 'Tanggal', 'Nama Procurement'];
        $products = Product::whereNull('deleted_at')->get();
        $flows = StockFlow::all();

        return view('pages.product.stock-flow', [
            'products' => $products,
            'flows' => $flows,
            'ths' => $ths
        ]);
    }

    public function stockPrediction($id)
    {
        return view('pages.product.stock-prediction', ['id' => $id]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ths = ['Kode barang', 'Nama barang', 'Unit', 'Peramalan Selanjutnya'];
        $products = Product::whereNull('deleted_at')->get();
        $units = Product::UNIT;

        return view('pages.product.index', ['ths' => $ths, 'products' => $products, 'units' => $units]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for ($i = 0; $i < (int)$request->qty; $i++) {
            $product = new Product;
            $this->saveProduct($product, $request);
        }

        return redirect()->back()->with(
            'success',
            "Berhasil menambah produk bernama $product->name"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('pages.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->saveProduct($product, $request);

        return redirect()->back()->with(
            'success',
            "Berhasil mengubah produk $product->name"
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->deleted_at = Carbon::now();
        $product->save();

        return redirect()->back()->with('success', "Berhasil menghapus produk $product->name");
    }
}
