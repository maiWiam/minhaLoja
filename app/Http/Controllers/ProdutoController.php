<?php

namespace App\Http\Controllers;

use App\Services\FakeStoreService;

class ProdutoController extends Controller
{
    protected $fakeStoreService;

    public function __construct(FakeStoreService $fakeStoreService)
    {
        $this->fakeStoreService = $fakeStoreService;
    }

    public function index()
    {
        $produtos = $this->fakeStoreService->getProdutos();
        return view('produtos.index', compact('produtos'));
    }
}
