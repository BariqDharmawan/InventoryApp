<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang', 'name', 'unit', 'qty'];

    public const UNIT = ['pcs', 'box'];
    public const THS = ['Nama barang', 'QTY', 'Unit', 'Peramalan'];

    public function procurement()
    {
        return $this->hasMany(Procurement::class, 'product_id', 'id');
    }

    public function stockFlows()
    {
        return $this->hasMany(StockFlow::class, 'product_id', 'id');
    }
}
