<?php
    include("conexao.php");
    echo "inciando cadastro de pessoa";
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $endereco = $_GET['endereco'];

   $sql = "INSERT INTO pessoas(nome, cpf, endereco)
   VALUES ('$nome', '$cpf', '$endereco')";

    if(mysqli_query($conexao, $sql)){
        $parte1 = array('resultado' => 'ok');
        $parte2 = array('detalhes' => 'ok');
        $resposta = json_encode(
                    array_merge(
                        $parte1,
                        $parte2
                    )
                );
        echo $resposta;
    }

    else{
        $parte1 = array('resultado' => 'erro');
        $parte2 = array('detalhes' => 'não foi possível realizar o cadastro');
        $resposta = json_encode(
                    array_merge(
                        $parte1,
                        $parte2
                    )
                );
        echo $resposta;
    }
        echo "terminou cadastro de pessoa";


    mysqli_close($conexao);
?>