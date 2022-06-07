<?php

namespace Modules\Produk\Repositories;

use Modules\Produk\Interfaces\ProdukRepositoryInterface;
use Modules\Produk\Entities\Produk;

class ProdukRepository implements ProdukRepositoryInterface 
{
    public function getAllProduks() 
    {
        return Produk::all();
    }

    public function getProdukById($produkId) 
    {
        return Produk::findOrFail($produkId);
    }

    public function deleteProduk($produkId) 
    {
        Produk::destroy($produkId);
    }

    public function createProduk(array $produkDetails) 
    {
        return Produk::create($produkDetails);
    }

    public function updateProduk($produkId, array $newDetails) 
    {
        return Produk::whereId($produkId)->update($newDetails);
    }
}
