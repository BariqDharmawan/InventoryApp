<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CancelProcurementInfo extends Model
{
    use HasFactory;

    protected $table = 'cancel_procurement_info';
    protected $fillable = ['desc', 'procurement_id'];

    public function procurement(): BelongsTo
    {
        return $this->belongsTo(Procurement::class, 'procurement_id', 'id');
    }
}
