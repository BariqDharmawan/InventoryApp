<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peramalan extends Model
{
    protected $table = 'peramalan';
    protected $fillable = ['product_code', 'peramalan'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_code', 'kode_barang');
    }
}
