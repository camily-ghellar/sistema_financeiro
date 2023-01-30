<?php

namespace App\Http\Controllers;

use App\Models\ContasModel;
use App\Models\PessoasModel;
use Illuminate\Http\Request;

class cadastrar_conta extends Controller
{
    public function cadastrarConta(Request $request)
    {
        $nova_conta = New ContasModel();
        $nova_conta->id_pessoa     = $request->id_pessoa;
        $nova_conta->numero_conta  = $request->num_conta;
        $nova_conta->save();

        return redirect('/listar_contas');
    }

    public function listarConta()
    {

    }

}
