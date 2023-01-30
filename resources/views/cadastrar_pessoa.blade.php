@extends('components.app')
@section('content')
<div class="formulario_alinhado">
    <form action="{{url('/cadastro_pessoa')}}" method="POST">
        @csrf
        <fieldset style="border-radius: 20px; background-color: #F6F6F6;">
            <br>
            <!--<b> --><legend>Cadastro de Pessoa</legend><!-- </b>
          <br> -->
            <div>
                <label>Nome: *</label><br><br><input type="text" name="nome" id="nome"size="50" placeholder="Digite o nome aqui" required style="padding-top: 4%; padding-bottom: 4%;">

                <br><br><br>
                <label>CPF: *</label><br><br><input type="text" name="cpf" id="cpf"size="50" placeholder="Digite o CPF aqui" required style="padding-top: 4%; padding-bottom: 4%;">


                <br><br><br>

                <label>Endereço: *</label><br><br><input type="text" name="endereco" id="endereco" size="50" placeholder="Digite o endereço aqui" required style="padding-top: 4%; padding-bottom: 4%;">
            </div>

            <br><br><br>

            <input type="submit" name="submit" value="Salvar" id="bt_cadastrar" style="background-color: #356345; color: white; padding-left: 42%;padding-right: 43%; padding-bottom: 3%; padding-top: 3%; font-size: 16px;">
            <br><br>

            <input type="reset" value="Cancelar" style="background-color: #FA8072; color: white; padding-left: 40%; padding-right: 40%; padding-bottom: 3%; padding-top: 3%; font-size: 16px">
        </fieldset>
    </form>
</div>

<a href="{{url('/listar_pessoas')}}"><button> Listar Pessoas</button></a>
<br><br><br><br>
@endsection
@section('scripts')
    <script src="{{asset('js/form_cadastro_pessoa.js')}}"></script>
@endsection
