<?php

namespace App\Models;

class Produto
{
    public $nome;
    public $preco;

    public function __construct(array $attributes = [])
    {
        $this->nome = $attributes['nome'] ?? null;
        $this->preco = $attributes['preco'] ?? null;
    }
}

