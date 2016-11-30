<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function (){ return redirect('/produtos'); });
    Route::get('/produtos', 'ProdutoController@lista')->name('produtos');

    Route::group(['prefix' => 'produto', 'as' => 'produto.'], function (){
        Route::get('novo', 'ProdutoController@novo')->name('novo');
        Route::post('adiciona', 'ProdutoController@adiciona')->name('adiciona');
        Route::get('mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+')->name('mostra');
        Route::get('remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+')->name('remove');
    });
});
