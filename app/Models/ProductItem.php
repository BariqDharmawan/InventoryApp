<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_barang';
    protected $keyType = 'string';

    protected $fillable = [
        'kode_barang',
        'description',
        'deleted_at',
        'product_id'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function saveProductItem($itemToSave, $request)
    {
        $itemToSave->product_id = $request->product_id;
        $itemToSave->kode_barang = $request->kode_barang;
        $itemToSave->description = $request->description;
        $itemToSave->save();
    }
}
