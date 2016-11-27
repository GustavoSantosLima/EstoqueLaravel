<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
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
        return view('formulario');
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
