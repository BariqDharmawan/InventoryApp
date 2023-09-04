<?php

namespace App\Http\Controllers;

use App\Models\CancelProcurementInfo;
use App\Models\ContractSupplier;
use App\Models\LogStock;
use App\Models\Procurement;
use App\Models\ProcurementProduct;
use App\Models\Product;
use App\Models\ProductItem;
use App\Models\StockFlow;
use App\Models\Supplier;
use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function plan($triwulanYear, $triwulanMonth)
    {
        $monthNames = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        $startMonth = explode('-', $triwulanMonth)[0];
        $endMonth = explode('-', $triwulanMonth)[1];

        $monthProcurement = $monthNames[$startMonth - 1] . ' - ' .
            $monthNames[$endMonth - 1] . ' ' . $triwulanYear;


        $procurementProducts = ProcurementProduct::whereYear('action_at', $triwulanYear)
            ->whereBetween(DB::raw('MONTH(action_at)'), [$startMonth, $endMonth])
            ->with('product')->orderBy('action_at', 'ASC')->get();


        return view('pages.procurement.plan', [
            'procurementProducts' => $procurementProducts,
            'ths' => [
                'Kode Barang', 'Nama Barang', 'Satuan', 'Kapasitas Gudang', 'Tanggal',
                'Stok Awal ' . $monthProcurement, 'Total Pengadaan', 'Total Penjualan',
                'Stok Akhir', 'Status'
            ]
        ]);
    }

    public function do($triwulanYear, $triwulanMonth)
    {
        $procurements = Procurement::with([
            'user', 'procurementProducts', 'supplier'
        ])->latest('action_at')->get();

        $startMonth = explode('-', $triwulanMonth)[0];
        $endMonth = explode('-', $triwulanMonth)[1];

        $products = ProcurementProduct::whereYear('action_at', $triwulanYear)
            ->whereBetween(DB::raw('MONTH(action_at)'), [$startMonth, $endMonth])
            ->with('product')->orderBy('action_at', 'ASC')->get();

        $productsToAddProcurement = Product::all();

        return view('pages.procurement.do', [
            'ths' => [
                'Kode Barang', 'Nama Barang', 'Satuan', 'Tanggal Aktivitas', 'Supplier',
            ],
            'products' => $products,
            'procurements' => $procurements,
            'suppliers' => Supplier::all(),
            'productsToAddProcurement' => $productsToAddProcurement
        ]);
    }

    public function check($triwulanYear, $triwulanMonth)
    {
        $startMonth = explode('-', $triwulanMonth)[0];
        $endMonth = explode('-', $triwulanMonth)[1];

        $products = ProcurementProduct::whereYear('action_at', $triwulanYear)
            ->whereBetween(DB::raw('MONTH(action_at)'), [$startMonth, $endMonth])
            ->with('product')->orderBy('action_at', 'ASC')->get();


        return view('pages.procurement.check', [
            'products' => $products,
            'ths' => [
                'Kode Barang', 'Nama Barang', 'Satuan', 'Hasil Peramalan', 'Tanggal Aktivitas', 'Supplier', 'Status'
            ],
        ]);
    }

    public function action($triwulanYear, $triwulanMonth)
    {
        $startMonth = explode('-', $triwulanMonth)[0];
        $endMonth = explode('-', $triwulanMonth)[1];

        $products = ProcurementProduct::whereYear('action_at', $triwulanYear)
            ->whereBetween(DB::raw('MONTH(action_at)'), [$startMonth, $endMonth])->orderBy('action_at', 'ASC')->get();


        return view('pages.procurement.action', [
            'products' => $products,
            'ths' => [
                'Kode Barang', 'Nama Barang', 'Satuan', 'Tanggal Aktivitas', 'Supplier', 'Status'
            ],
        ]);
    }

    public function cancelInfo(Request $request, $id)
    {

        $addInfoCancel = CancelProcurementInfo::create([
            'desc' => $request->desc,
            'procurement_id' => $id
        ]);

        return redirect()->back()->with('success', 'Berhasil memberikan keterangan');
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
                'procurement_id' => $procurement->id,
                'action_at' => $request->action_at
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
                if ($logStock) {
                    $logStock->delete();
                }
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
