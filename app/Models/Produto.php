<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Produto extends Model

{
    protected $fillable = ['nome', 'preco', 'descricao', 'imagem'];

    public function store(Request $request) // Adicionar produto
    {
        $produto = Produto::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }
}