<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\ContractSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ContractSupplierController extends Controller
{
    private function saveContract($contractSupplier, $fileName, $supplierId, $request)
    {
        $contractSupplier->title = $request->title;
        $contractSupplier->contract_value = $request->contract_value;
        $contractSupplier->start_date = $request->start_date;
        $contractSupplier->end_date = $request->end_date;
        if ($fileName !== null) {
            $contractSupplier->filename = $fileName;
        }
        $contractSupplier->description = $request->description;
        $contractSupplier->supplier_id = $supplierId;
        $contractSupplier->save();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ths = [
            'Supplier',
            'Judul Kontrak',
            'Tanggal Mulai',
            'Tanggal Selesai',
            'Value',
            'Attachment',
            'Persetujuan',
            'Lihat Produk'
        ];
        $contractSupplier = ContractSupplier::with('supplier')->get();

        $suppliers = Supplier::all();

        return view('pages.supplier.contract', [
            'ths' => $ths,
            'contractSupplier' => $contractSupplier,
            'suppliers' => $suppliers
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
        $upload = $request->file('attachment')->store('public/attachments');

        $attachment = new Attachment;
        $attachment->uploadFile($request);

        $contractSupplier = new ContractSupplier;
        $this->saveContract($contractSupplier, $upload, $request->supplier_id, $request);

        $supplier = Supplier::find($contractSupplier->supplier_id);

        return redirect()->back()->with(
            'success',
            'Berhasil menambah kontrak untuk supplier ' . $supplier->name
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(ContractSupplier $contractSupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractSupplier $contractSupplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContractSupplier $contractSupplier)
    {
        $supplierRelated = Supplier::findOrFail($contractSupplier->supplier_id);

        $fileChange = null;
        if ($request->hasFile('attachment')) {
            $attachment = new Attachment;
            $attachment->uploadFile($request);

            $fileChange = $attachment;
        }

        $this->saveContract($contractSupplier, $fileChange, $contractSupplier->supplier_id, $request);

        return redirect()->back()->with(
            'success',
            "Berhasil mengubah kontrak dengan supplier $supplierRelated->name"
        );
    }
}
