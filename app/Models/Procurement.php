<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'qty',
        'price',
        'contract_supplier_id',
        'product_id',
        'action_at',
        'status',
        'users_id'
    ];

    public const STATUS = ['approved', 'rejected'];

    public function stockFlow()
    {
        return $this->hasOne(StockFlow::class, 'procurement_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
