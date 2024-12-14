<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/selecionar/{id}', [ProdutoController::class, 'selecionar'])->name('produtos.selecionar');
Route::get('/produtos/selecionados', [ProdutoController::class, 'viewSelecionados'])->name('produtos.selecionados');
Route::delete('/produtos/remover/{id}', [ProdutoController::class, 'remover'])->name('produtos.remover');
