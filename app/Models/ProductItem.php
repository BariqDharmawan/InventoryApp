<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_barang';
    protected $keyType = 'string';

    protected $fillable = [
        'kode_barang',
        'name',
        'unit',
        'description',
        'deleted_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_name', 'kode_barang');
    }
}
