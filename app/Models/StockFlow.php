<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockFlow extends Model
{
    use HasFactory;

    public const TYPE_FLOW = ['masuk', 'keluar'];

    public function products()
    {
        return $this->hasOne(Product::class, 'product_id', 'id');
    }

    public function procurement()
    {
        return $this->belongsTo(Procurement::class, 'procurement_id', 'id');
    }
}
