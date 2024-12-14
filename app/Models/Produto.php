<?php

namespace App\Models;

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $imagem;
    public $avaliacao;
    public $num_avaliacoes;

    public function __construct(array $attributes = [])
    {
        $this->id = $attributes['id'] ?? null;
        $this->nome = $attributes['nome'] ?? null;
        $this->preco = $attributes['preco'] ?? null;
        $this->descricao = $attributes['descricao'] ?? null;
        $this->categoria = $attributes['categoria'] ?? null;
        $this->imagem = $attributes['imagem'] ?? null;
        $this->avaliacao = $attributes['avaliacao'] ?? null;
        $this->num_avaliacoes = $attributes['num_avaliacoes'] ?? null;
    }
}
