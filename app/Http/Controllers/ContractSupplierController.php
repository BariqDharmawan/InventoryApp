<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ContractSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ths = ['Supplier', 'Tanggal Mulai', 'Tanggal Selesai', 'Value', 'Attachment'];
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
        $contractSupplier = new ContractSupplier;
        $contractSupplier->create([
            'contract_value' => $request->contract_value,
            'supplier_id' => $request->supplier_id,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            // 'attachment' => $request->attachment
        ]);
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
        $contractSupplier->start_date = $request->start_date;
        $contractSupplier->end_date = $request->end_date;
        $contractSupplier->attachment = $request->attachment;
        $contractSupplier->description = $request->description;
        $contractSupplier->save();

        $supplierRelated = Supplier::findOrFail($contractSupplier->supplier_id);

        return redirect()->back()->with(
            'success',
            "Berhasil mengubah kontrak dengan supplier $supplierRelated->name"
        );
    }
}
