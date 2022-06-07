<?php

namespace Modules\Produk\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama','keterangan','harga','persediaan'];
    
    protected static function newFactory()
    {
        return \Modules\Produk\Database\factories\ProdukFactory::new();
    }
}
