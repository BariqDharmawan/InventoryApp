<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ths = ['title', 'category', 'qty', 'price', 'status', 'admin pengontrol', 'product'];
        $procurements = Procurement::all();

        return view('pages.procurement.index', [
            'ths' => $ths,
            'procurements' => $procurements,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Procurement $procurement)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procurement $procurement)
    {
        //
    }
}
