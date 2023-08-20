<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }
}
