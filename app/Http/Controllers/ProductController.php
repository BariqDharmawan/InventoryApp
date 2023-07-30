<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private function saveProduct($productToSave, $request)
    {
        $productToSave->name = strtolower($request->name);
        $productToSave->unit = $request->unit;
        $productToSave->save();
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

    public function index()
    {
        $ths = ['Kode barang', 'Nama barang', 'Peramalan'];
        $productItem = ProductItem::with('products')->whereNull('deleted_at')->get();
        $units = Product::UNIT;

        return view('pages.product.index', [
            'ths' => $ths,
            'productItem' => $productItem,
            'units' => $units,
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $this->saveProduct($product, $request);

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
}
