@extends('components.app')
@section('content')
<br><br>
<table>
    <tr>
        <th>Nome: </th>
        <th>CPF: </th>
        <th>Número da conta: </th>
        <th>Editar: </th>
        <th>Remover: </th>

    </tr>
    @if(isset($contas))
        @foreach($contas as $conta)
            <tr>
                <td>{{$conta['pessoa']['nome']}}</td>
                <td>{{$conta['pessoa']['cpf']}}</td>
                <td>{{$conta['conta']['numero_conta']}}</td>
            </tr>
        @endforeach
    @endif
</table>
@endsection
