<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'produk_id';

    public function detailpenjualan()
    {
        return $this->belongsToMany(DetailPenjualan::class, 'detailpenjualans', 'produk_id', 'produk_id');
    }
}
