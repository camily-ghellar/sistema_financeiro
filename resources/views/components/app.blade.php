<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CAMILY</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Camily do Nascimento Ghellar">
    <meta name="refresh" content="2000">
    <meta name="description" content="Cadastrar Conta."/>
    <link rel="stylesheet" href="{{url('css/estilo.css')}}">
</head>

<body>
@include('components.header')
<main>
    @yield('content')
</main>
@include('components.footer')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@yield('scripts')
</body>

</html>
