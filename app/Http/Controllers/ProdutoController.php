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

    // lista 
    public function index()
    {
        $produtos = $this->fakeStoreService->getProdutos();
        return view('produtos.index', compact('produtos'));
    }

    public function selecionar($id)
    {
        session()->push('produtos_selecionados', $id);
        return redirect()->route('produtos.selecionados');
    }

    
    public function viewSelecionados()
    {
        $produtosSelecionadosIds = session('produtos_selecionados', []);

        if (empty($produtosSelecionadosIds)) {
            return redirect()->route('produtos.index')->with('message', 'Nenhum produto selecionado.');
        }

        $produtos = $this->fakeStoreService->getProdutos()->filter(function ($produto) use ($produtosSelecionadosIds) {
            return in_array($produto->id, $produtosSelecionadosIds);
        });

        return view('produtos.selecionados', compact('produtos'));
    }
    public function remover($id)
{
    $produtosSelecionados = session('produtos_selecionados', []);
    if (($key = array_search($id, $produtosSelecionados)) !== false) {
        unset($produtosSelecionados[$key]);
        session(['produtos_selecionados' => array_values($produtosSelecionados)]);
    }

    return redirect()->route('produtos.selecionados');
}
}