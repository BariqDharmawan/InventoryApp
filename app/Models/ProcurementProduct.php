<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcurementProduct extends Model
{
    use HasFactory;

    protected $fillable = ['procurement_id', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }

    public function procurement()
    {
        return $this->belongsTo(Procurement::class, 'procurement_id', 'id');
    }
}
