<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'qty',
        'price',
        'users_id'
    ];

    protected $casts = [
        'action_at' => 'date:Y-m-d',
    ];

    public function stockFlow()
    {
        return $this->hasOne(StockFlow::class, 'procurement_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
