<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $fillable = [
        'tanggal',
        'product_id',
        'penjualan',
        'customer',
        'invoice',
    ];

    protected $casts = [
        'tanggal' => 'date:Y-m-d',
    ];

    public function dummyQTYPenjualan()
    {
        return rand(10, 999);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }
}
