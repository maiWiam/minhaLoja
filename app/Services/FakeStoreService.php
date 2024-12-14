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

        $produtosLaravel = collect($produtos)->map(function ($produto) {
            return new Produto([
                'nome' => $produto['title'],
                'preco' => $produto['price'],
                'descricao' => $produto['description'], 
                'categoria' => $produto['category'],   
                'imagem' => $produto['image'],         
                'avaliacao' => $produto['rating']['rate'], 
                'num_avaliacoes' => $produto['rating']['count'],  
            ]);
        });

        return $produtosLaravel;
    }
}
