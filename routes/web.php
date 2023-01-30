<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('cadastrar_conta');
});
Route::get('/cadastrar_pessoa', function () {
    return view('cadastrar_pessoa');
});
Route::get('/cadastrar_conta', function () {
    $pessoas = New \App\Models\PessoasModel();

    return view('cadastrar_conta',['pessoas' => $pessoas->all()]);
});
Route::get('/cadastrar_movimentacao', function () {
    $pessoas = New \App\Models\PessoasModel();
    $contas = New \App\Models\ContasModel();

    return view('seleciona_conta_movimentacao',['pessoas' => $pessoas->all(),'contas' => $contas->all()]);
});
Route::get('/listar_contas', function () {
    $contas = New \App\Models\ContasModel();
    $pessoas = New \App\Models\PessoasModel();
    $retorno = [];
    foreach($contas->all() as $conta) {
        $pessoa = $pessoas->where('id', '=',$conta->id_pessoa)->first();

        $retorno[$conta->id]['pessoa'] = $pessoa;
        $retorno[$conta->id]['conta'] = $conta;
    }

    return view('listar_contas',['contas' => $retorno]);
});
Route::get('/listar_movimentacao', function () {
    $contas = New \App\Models\ContasModel();
    $pessoas = New \App\Models\PessoasModel();
    $movimentacoes = New \App\Models\MovimentacoesModel();
    $retorno = [];
    foreach($movimentacoes->all() as $movimentacao) {
        $pessoa = $pessoas->where('id', '=',$movimentacao->id_pessoa)->first();
        $conta  = $contas->where('id', '=',$movimentacao->id_conta)->first();

        $retorno[$movimentacao->id]['pessoa'] = $pessoa;
        $retorno[$movimentacao->id]['conta'] = $conta;
        $retorno[$movimentacao->id]['movimentacao'] = $movimentacao;
    }
    return view('listar_movimentacao',['movimentacoes' => $retorno]);
});
Route::get('/listar_pessoas', function () {
    $pessoas = New \App\Models\PessoasModel();

    return view('listar_pessoas',['pessoas' => $pessoas->all()]);
});



Route::post('/cadastro_pessoa', [App\Http\Controllers\cadastrar_pessoa::class, 'cadastrarPessoa'])->name('cadastroPessoa');
Route::post('/cadastro_conta', [App\Http\Controllers\cadastrar_conta::class, 'cadastrarConta'])->name('cadastroConta');
Route::post('/selecionaContaMovimentacao', [App\Http\Controllers\cadastrar_movimentacao::class, 'selecionaContaMovimentacao'])->name('selecionaContaMovimentacao');
Route::post('/cadastro_movimentacao', [App\Http\Controllers\cadastrar_movimentacao::class, 'cadastroMovimentacao'])->name('cadastroMovimentacao');

