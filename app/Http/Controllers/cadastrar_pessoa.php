<?php

namespace App\Http\Controllers;

use App\Models\PessoasModel;
use Illuminate\Http\Request;

class cadastrar_pessoa extends Controller
{
    public function cadastrarPessoa(Request $request)
    {

        $nova_pessoa = New PessoasModel();
        $nova_pessoa->nome      = $request->nome;
        $nova_pessoa->cpf       = $request->cpf;
        $nova_pessoa->endereco  = $request->endereco;
        $nova_pessoa->save();

        return redirect('/listar_pessoas');
    }

}
