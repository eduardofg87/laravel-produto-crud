<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Exception;
use Illuminate\Support\Facades\Session;


class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        try {
            $produto = Produto::create([
                'nome' => $request->nome,
                'custo' => $request->custo,
                'preco' => $request->preco,
                'quantidade' => $request->quantidade,
            ]);
            if(!empty($produto)) {
                Session::flash('alert-success', 'Produto criado com sucesso!');
                return view('produtos.show', ['produto' => $produto]);
            }
        }
        catch(Exception $e){
            Session::flash('alert-danger', 'Erro ao salvar produto no banco de dados!');
            return view('produtos.create');
        }
        
    }

    public function show($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            return view('produtos.show', ['produto' => $produto]);
        }
        catch(Exception $e){
            Session::flash('alert-danger', 'Erro ao encontrar o produto!');
            return view('produtos.create');
        }
        
    }

    public function edit($id)
    {
        try{
            $produto = Produto::findOrFail($id);
            return view('produtos.edit', ['produto' => $produto]);
        }
        catch(Exception $e){
            Session::flash('alert-danger', 'Erro ao encontrar o produto!');
            return view('produtos.create');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $produto = Produto::findOrFail($id);
            $update = $produto->update([
                'nome' => $request->nome,
                'custo' => $request->custo,
                'preco' => $request->preco,
                'quantidade' => $request->quantidade,
            ]);
            if(!empty($update)) {
                Session::flash('alert-success', 'Produto atualizado com sucesso!');
                return view('produtos.show', ['produto' => $produto]);
            }
        }
        catch(Exception $e){
            Session::flash('alert-danger', 'Erro ao atualizar o produto!');
            return view('produtos.create');
        }
    }

    public function delete($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            return view('produtos.delete', ['produto' => $produto]);
        }
        catch(Exception $e){
            return view('produtos.create');
        }
    }

    public function destroy($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            $destroy = $produto->delete();
            if(!empty($destroy)) {
                Session::flash('alert-success', 'Produto excluído com sucesso!');
                return view('produtos.create');
            }
        }
        catch(Exception $e){
            Session::flash('alert-danger', 'Erro ao excluir produto no banco de dados!');
            return view('produtos.create');
        }
    }

}
