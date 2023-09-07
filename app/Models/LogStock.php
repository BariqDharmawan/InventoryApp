<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogStock extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'activity_desc', 'type_log', 'activity_id', 'action_at'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'kode_barang');
    }

    protected $casts = [
        'action_at' => 'datetime:Y-m-d H:i',
    ];
}
