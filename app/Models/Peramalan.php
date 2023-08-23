<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peramalan extends Model
{
    use HasFactory;

    protected $table = 'peramalan';
    protected $fillable = ['product_id', 'jumlah_peramalan', 'month'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }
}
