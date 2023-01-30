@extends('components.app')
@section('content')
<br><br>
<table>
    <tr>
        <th>Nome: </th>
        <th>CPF: </th>
        <th>Número da conta: </th>
        <th>Valor: </th>
        <th>Deposito/Retirada: </th>
        <th>Editar: </th>
        <th>Remover: </th>
    </tr>
    @if(isset($movimentacoes))
        @foreach($movimentacoes as $movimentacao)
            <tr>
                <td>{{$movimentacao['pessoa']['nome']}}</td>
                <td>{{$movimentacao['pessoa']['cpf']}}</td>
                <td>{{$movimentacao['conta']['numero_conta']}}</td>
                <td>{{$movimentacao['movimentacao']['valor']}}</td>
                <td>{{$movimentacao['movimentacao']['dep_ret'] == "ret" ? "Retirada" : "Deposito"}}</td>
            </tr>
        @endforeach
    @endif
</table>
@endsection
