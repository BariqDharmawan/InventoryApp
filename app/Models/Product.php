<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'unit'];

    public const UNIT = ['pcs', 'box'];

    public function productItems()
    {
        return $this->hasMany(ProductItem::class, 'product_id', 'id');
    }

    public function procurement()
    {
        return $this->hasMany(Procurement::class, 'product_id', 'id');
    }
}
