<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ContractSupplier extends Model
{
    use HasFactory;

    protected $filable = [
        'contract_value',
        'supplier_id',
        'description',
        'start_date',
        'end_date',
        'attachment'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function addContract($supplierId, Request $request)
    {
        return $this->create([
            'contract_value' => $request->contract_value,
            'supplier_id' => $supplierId,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'attachment' => $request->attachment
        ]);
    }
}
