<?php

namespace App\Http\Controllers;

use App\Models\ContasModel;
use App\Models\MovimentacoesModel;
use App\Models\PessoasModel;
use Illuminate\Http\Request;

class cadastrar_movimentacao extends Controller
{

    public function cadastroMovimentacao(Request $request)
    {
        $nova_movimentacao = New MovimentacoesModel();
        $nova_movimentacao->id_pessoa = $request->id_pessoa;
        $nova_movimentacao->id_conta  = $request->id_conta;
        $nova_movimentacao->valor     = $request->valor;
        $nova_movimentacao->dep_ret   = $request->dep_ret;
        $nova_movimentacao->save();

        return redirect('/listar_movimentacao');
    }

    public function selecionaContaMovimentacao(Request $request)
    {
        $contas = New ContasModel();
        $pessoas = New PessoasModel();

        return view('cadastrar_movimentacao',['pessoas' => $pessoas->where('id','=',$request['id_pessoa'])->get(),'contas' => $contas->where('id_pessoa','=',$request['id_pessoa'])->get()]);

    }
}
