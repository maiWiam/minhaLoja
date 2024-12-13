<?php

namespace App\Http\Controllers;
use App\Models\Prod;
use Illuminate\Http\Request;
use App\Services\FakeStoreService; 

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = resolve(FakeStoreService::class)->getProdutos();
        return view('produtos', compact('produtos'));
    }
}