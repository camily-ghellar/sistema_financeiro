@extends('components.app')
@section('content')

<div class="formulario_alinhado">
    <form action="{{url('/cadastro_conta')}}" method="POST">
        @csrf
        <fieldset style="border-radius: 20px; background-color: #F6F6F6;">
            <br>
            <!--<b> --><legend>Cadastro de Conta</legend><!-- </b>
          <br> -->
            <div>
                <label>Pessoas: *</label><br><br>
                <select required id="id_pessoa" name="id_pessoa">
                    <option value="" selected>Selecione</option>
                    @if(isset($pessoas))
                        @foreach($pessoas as $pessoa)
                            <option value="{{$pessoa->id}}">{{$pessoa->nome}} {{$pessoa->cpf}}</option>
                        @endforeach
                    @endif
                </select>

                <br><br><br>
                <label>Número da conta: </label><br><br><input type="text" name="num_conta" id="num_conta" size="50" placeholder="Digite o número da conta aqui" style="padding-top: 4%; padding-bottom: 4%;">


            </div>

            <br><br><br>

            <input type="submit" name="submit" id="bt_cadastrar" value="Salvar" style="background-color: #356345; color: white; padding-left: 42%;padding-right: 43%; padding-bottom: 3%; padding-top: 3%; font-size: 16px;">
            <br><br>

            <input type="reset" value="Cancelar" style="background-color: #FA8072; color: white; padding-left: 40%; padding-right: 40%; padding-bottom: 3%; padding-top: 3%; font-size: 16px">
        </fieldset>
    </form>
</div>
<a href="{{url('/listar_contas')}}"><button> Listar Contas</button></a>
<br><br><br><br>
@endsection
