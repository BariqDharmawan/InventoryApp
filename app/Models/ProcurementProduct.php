<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcurementProduct extends Model
{
    use HasFactory;

    protected $fillable = ['procurements_id', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function procurement()
    {
        return $this->belongsTo(Procurement::class, 'procurements_id', 'id');
    }
}
