<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\Produto;

class FakeStoreService
{
    public function getProdutos()
    {
        $client = new Client();
        $response = $client->get('https://fakestoreapi.com/products');
        $produtos = json_decode($response->getBody(), true);

        // Mapear os dados para o modelo Produto
        $produtosLaravel = collect($produtos)->map(function ($produto) {
            return new Produto([
                'nome' => $produto['title'],
                'preco' => $produto['price'],
                // ... outros atributos
            ]);
        });

        return $produtosLaravel;
    }
}
