<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\LogStock;
use App\Models\Penjualan;
use App\Models\Procurement;
use App\Models\Product;
use App\Service\PeramalanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private function saveProduct($productToSave, $request)
    {
        $productToSave->kode_barang = $request->kode_barang;
        $productToSave->qty = $request->qty;
        $productToSave->harga_satuan = $request->harga_satuan;
        $productToSave->name = strtolower($request->name);
        $productToSave->unit = $request->unit;
        $productToSave->save();
    }

    public function logStock()
    {
        return view('pages.product.log', [
            'logs' => LogStock::latest('action_at')->get(),
            'ths' => ['Product', 'Deskripsi', 'Tanggal Aktivitas', 'Detail']
        ]);
    }

    public function index()
    {
        $products = Product::latest('created_at')->with('penjualan')->get();

        return view('pages.product.index', [
            'ths' => ['Nama barang', 'QTY', 'Max Capacity', 'Unit', 'Harga Satuan', 'Penjualan'],
            'units' => Product::UNIT,
            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $this->saveProduct($product, $request);

        return redirect()->back()->with(
            'success',
            "Berhasil menambah produk bernama $product->name"
        );
    }

    public function show(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        $this->saveProduct($product, $request);

        return redirect()->back()->with(
            'success',
            "Berhasil mengubah produk $product->name"
        );
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus produk');
    }

    public function peramalan()
    {
        Artisan::call('app:create-peramalan');
        return "ok";
    }
}
