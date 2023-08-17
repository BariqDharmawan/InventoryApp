<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'kode_barang',
        'product_id',
        'penjualan',
        'harga',
        'customer',
        'invoice'
    ];

    protected $table = 'penjualan';
}
