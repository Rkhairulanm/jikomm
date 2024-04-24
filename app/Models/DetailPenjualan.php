<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detailpenjualans';

    protected $fillable = ['petugas_id', 'penjualan_id', 'produk_id', 'jumlah   ', 'subtotal', 'struk'];
    public function user()
    {
        return $this->hasmany(User::class, 'petugas_id', 'id');
    }
    // protected $guarded = [];
}
