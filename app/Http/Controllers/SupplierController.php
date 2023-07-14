<?php

namespace App\Http\Controllers;

use App\Models\ContractSupplier;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private function saveSupplier($supplierToAdd, $request)
    {
        $supplierToAdd->name = $request->name;
        $supplierToAdd->address = $request->address;
        $supplierToAdd->telephone = $request->telephone;
        $supplierToAdd->email = $request->email;

        $supplierToAdd->save();

        return $supplierToAdd;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.supplier.index');
    }

    public function show(Supplier $supplier)
    {
        return view('pages.supplier.show', ['supplier' => $supplier]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier = new Supplier;
        $addNewSupplier = $this->saveSupplier($supplier, $request);

        if ($request->has('add_contract')) {
            $contractSupplier = new ContractSupplier;
            $contractSupplier->addContract($addNewSupplier->id, $request);
        }

        return redirect()->back()->with(
            'success',
            "Berhasil menambah supplier $supplier->name"
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->saveSupplier($supplier, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->deleted_at = Carbon::now();
    }
}
