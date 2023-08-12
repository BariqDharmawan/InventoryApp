<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\Procurement;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function saveProduct($productToSave, $request)
    {
        if ($request->has('supplier_id')) {
            $productToSave->supplier_id = $request->supplier_id;
        }
        $productToSave->id = $request->id;
        $productToSave->name = strtolower($request->name);
        $productToSave->unit = $request->unit;
        $productToSave->save();
    }

    public function stockFlow()
    {
        $ths = ['Nama Produk',  'Qty', 'Tanggal', 'Nama Procurement'];
        $products = Product::all();

        $flowIn = StockFlow::with(['product', 'procurement'])->where('type', 'masuk')->latest('date')->get();
        $flowOut = StockFlow::with(['product', 'procurement'])->where('type', 'keluar')->latest('date')->get();

        return view('pages.product.stock-flow', [
            'products' => $products,
            'flowIn' => $flowIn,
            'flowOut' => $flowOut,
            'ths' => $ths,
        ]);
    }

    public function stockPrediction($id)
    {
        return view('pages.product.stock-prediction', ['id' => $id]);
    }

    public function index()
    {
        $productItem = ProductItem::with('products')->whereNull('deleted_at')->get();
        $units = Product::UNIT;

        $suppliers = Supplier::has('contractSupplier')->get();
        $contractSupplier = ContractSupplier::all();

        $products = Product::latest('created_at')->get();

        return view('pages.product.index', [
            'ths' => Product::THS,
            'productItem' => $productItem,
            'units' => $units,
            'suppliers' => $suppliers,
            'products' => $products,
            'procurementStatus' => Procurement::STATUS,
            'contractSupplier' => $contractSupplier,
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
        $ths = ['Kode Item', 'Deskripsi'];
        $productItems = ProductItem::whereNull('deleted_at')->where('product_id', $product->id)->get();

        return view('pages.product.detail', [
            'product' => $product,
            'productItems' => $productItems,
            'ths' => $ths
        ]);
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
}
