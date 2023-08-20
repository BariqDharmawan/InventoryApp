<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockFlow extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'type', 'date', 'qty', 'procurement_id'];

    public const TYPE_FLOW = ['masuk', 'keluar'];

    protected $casts = [
        'date' => 'date:Y-m-d'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }

    public function procurement()
    {
        return $this->belongsTo(Procurement::class, 'procurement_id', 'id');
    }
}
