<?php

namespace Modules\Produk\Interfaces;

interface ProdukRepositoryInterface 
{
    public function getAllProduks();
    public function getProdukById($produkId);
    public function deleteProduk($produkId);
    public function createProduk(array $produkDetails);
    public function updateProduk($produkId, array $newDetails);
}