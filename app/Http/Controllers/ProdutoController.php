<?php

namespace Estoque\Http\Controllers;

use Estoque\Categoria;
use Estoque\Http\Requests\ProdutoRequest;
use Estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista(){
        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        return view('detalhes')->with('produto', $produto);
    }

    public function novo(){
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request){
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }
}
