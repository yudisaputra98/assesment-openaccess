<?php

namespace Modules\Produk\Http\Controllers;

use Modules\Produk\Interfaces\ProdukRepositoryInterface;
use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdukController extends Controller
{
    private ProdukRepositoryInterface $produkRepository;

    public function __construct(ProdukRepositoryInterface $produkRepository) 
    {
        $this->produkRepository = $produkRepository;
    }
    
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->produkRepository->getAllProduks()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $produkDetails = $request->only([
            'nama',
            'keterangan',
            'harga',
            'persediaan'
        ]);

        return response()->json(
            [
                'success' => true,
                'data' => $this->produkRepository->createProduk($produkDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request, $id): JsonResponse 
    {
        $data = $this->produkRepository->getProdukById($id);
        return response()->json($data);
    }

    public function update(Request $request, $id): JsonResponse 
    {
        $produkDetails = $request->only([
            'nama',
            'keterangan',
            'harga',
            'persediaan'
        ]);

        return response()->json([
            'success' => true,
            'data' => $this->produkRepository->updateProduk($id, $produkDetails)
        ]);
    }

    public function destroy(Request $request, $id): JsonResponse 
    {
        $this->produkRepository->deleteProduk($id);

        return response()->json(
            [
                'success' => true,
                'message' => "Data berhasil dihapus!"
            ]
        );
    }
}
