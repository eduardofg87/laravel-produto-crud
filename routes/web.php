<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutosController::class, 'show']);
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::put('/produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete']);
Route::delete('/produtos/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');
