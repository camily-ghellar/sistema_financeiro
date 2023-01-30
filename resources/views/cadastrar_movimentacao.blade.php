@extends('components.app')
@section('content')

<div class="formulario_alinhado">
    <form action="{{url('cadastro_movimentacao')}}" method="POST">
        @csrf
        <fieldset style="border-radius: 20px; background-color: #F6F6F6;">
            <br>
            <!--<b> --><legend>Cadastro de Movimentação</legend><!-- </b>
          <br> -->
            <div>
                <label>Pessoa: *</label><br><br>
                <select required id="id_pessoa" name="id_pessoa">
                    @if(isset($pessoas))
                        @foreach($pessoas as $pessoa)
                            <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                        @endforeach
                    @endif
                </select>

                <br><br><br>

                <label>Número da conta: </label><br><br>
                <select id="id_conta" name="id_conta">
                    @if(isset($contas))
                        @foreach($contas as $conta)
                            <option value="{{$conta->id}}">{{$conta->numero_conta}}</option>
                        @endforeach
                    @endif

                </select>

                <br><br><br>

                <label>Valor: </label><br><br><input type="number" step="0.01" name="valor" id="valor"size="50" placeholder="Digite o valor aqui" style="padding-top: 4%; padding-bottom: 4%;">
                <br><br><br>

                <label>Depositar/Retirar: </label><br><br>
                <select name="dep_ret" id="dep_ret">
                    <option value="" selected>Selecione</option>
                    <option value="dep">Depositar</option>
                    <option value="ret">Retirar</option>
                </select>


            </div>

            <br><br><br>

            <input type="submit" name="submit" id="bt_cadastrar" value="Salvar" style="background-color: #356345; color: white; padding-left: 42%;padding-right: 43%; padding-bottom: 3%; padding-top: 3%; font-size: 16px;">
            <br><br>

            <input type="reset" value="Cancelar" style="background-color: #FA8072; color: white; padding-left: 40%; padding-right: 40%; padding-bottom: 3%; padding-top: 3%; font-size: 16px">
        </fieldset>
    </form>
</div>

<a href="{{url('/listar_movimentacao')}}"><button> Listar Movimentação</button></a>
<br><br><br><br>

@endsection

@section('scripts')

    <script type="text/javascript">
        {{--$(function () { // quando o documento estiver pronto/carregado--}}
        {{--    $("#id_pessoa").change(function () {--}}
        {{--        let id_pessoa = $("#id_pessoa").val();--}}
        {{--        var dados = JSON.stringify({ id_pessoa : id_pessoa});--}}

        {{--            // fazer requisição para o back-end--}}
        {{--            console.log('{{route('listaPessoasMovimentacao')}}');--}}
        {{--            $.ajax({--}}
        {{--                url: '{{route('listaPessoasMovimentacao')}}',--}}
        {{--                type: 'POST',--}}
        {{--                dataType: 'json', // os dados são recebidos no formato json--}}
        {{--                contentType: 'application/json', // tipo dos dados enviados--}}
        {{--                data: dados, // estes são os dados enviados--}}
        {{--                success: function (response) {--}}
        {{--                    console.log(response)--}}
        {{--                },--}}
        {{--                error: function () {--}}
        {{--                    alert("Erro na conexão, verifique o backend. ");--}}
        {{--                    // https://api.jquery.com/jquery.ajax/--}}
        {{--                }--}}
        {{--            });--}}
        {{--    });--}}
        {{--})--}}
    </script>
    <script src="{{asset('js/form_cadastro_movimentacao.js')}}"></script>
@endsection
