<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang', 'name', 'unit', 'qty', 'harga_satuan'];

    public const UNIT = ['pcs', 'box', 'pack', 'karton'];
    public const THS = ['Nama barang', 'QTY', 'Unit', 'Harga Satuan', 'Penjualan', 'Peramalan'];

    public function procurement()
    {
        return $this->hasMany(Procurement::class, 'product_id', 'kode_barang');
    }

    public function stockFlows()
    {
        return $this->hasMany(StockFlow::class, 'product_id', 'kode_barang');
    }

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'product_id', 'kode_barang');
    }

    public function peramalan()
    {
        return $this->hasOne(Peramalan::class, 'product_code', 'kode_barang');
    }
}
