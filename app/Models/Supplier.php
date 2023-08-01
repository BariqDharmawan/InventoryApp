<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'telephone',
        'email'
    ];

    public function contractSupplier()
    {
        return $this->hasMany(ContractSupplier::class, 'supplier_id', 'id');
    }
}
