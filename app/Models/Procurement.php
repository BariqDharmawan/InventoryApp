<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'price',
        'users_id',
        'status',
        'supplier_id',
        'action_at',
    ];

    protected $casts = [
        'action_at' => 'date:Y-m-d',
    ];

    public function stockFlow(): HasOne
    {
        return $this->hasOne(StockFlow::class, 'procurement_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function procurementProducts(): HasMany
    {
        return $this->hasMany(ProcurementProduct::class, 'procurement_id', 'id');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
