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
        'filename'
    ];

    protected  $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
