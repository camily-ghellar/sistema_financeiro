@extends('components.app')
@section('content')

    <div class="formulario_alinhado">
        <form action="{{url('selecionaContaMovimentacao')}}" method="POST">
            @csrf
            <fieldset style="border-radius: 20px; background-color: #F6F6F6;">
                <br>
                <!--<b> --><legend>Cadastro de Movimentação</legend><!-- </b>
          <br> -->
                <div>
                    <label>Selecione a Pessoa: *</label><br><br>
                    <select required id="id_pessoa" name="id_pessoa">
                        <option value="" selected>Selecione</option>
                        @if(isset($pessoas))
                            @foreach($pessoas as $pessoa)
                                <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                            @endforeach
                        @endif
                    </select>
                    <input type="submit" name="submit" id="bt_cadastrar" value="Selecionar" style="background-color: #356345; color: white; padding-left: 42%;padding-right: 43%; padding-bottom: 3%; padding-top: 3%; font-size: 16px;">
            </fieldset>
        </form>
    </div>


@endsection
