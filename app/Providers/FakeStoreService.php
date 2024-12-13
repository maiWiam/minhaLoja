<?php

namespace App\Services; // Assumindo que o serviço esteja no namespace App\Services

use GuzzleHttp\Client;
use App\Models\Produto; // Substitua 'App\Models' pelo namespace correto do seu modelo

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