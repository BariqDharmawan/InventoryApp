<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = ['name', 'unit'];

    public const UNIT = ['pcs', 'box'];
    public const THS = ['Nama barang', 'QTY', 'Unit', 'Peramalan'];

    public function productItems()
    {
        return $this->hasMany(ProductItem::class, 'product_id', 'id');
    }

    public function procurement()
    {
        return $this->hasMany(Procurement::class, 'product_id', 'id');
    }

    public function stockFlows()
    {
        return $this->hasMany(StockFlow::class, 'product_id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
