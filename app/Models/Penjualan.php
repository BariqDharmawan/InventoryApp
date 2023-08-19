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
        'harga',
        'customer',
        'invoice'
    ];

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
