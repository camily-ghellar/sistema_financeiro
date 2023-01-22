<?php
    include("conexao.php");
    echo "inciando cadastro de conta";

    $sql="SELECT nome, cpf FROM pessoas"; 
    echo "<select name=pessoa value=''>Pessoa: *</select>"; // lista de pessoas

    foreach ($dbo->query($sql) as $row){

        echo "<option value=$row[nome]>$row[cpf]</option>";  
}

        echo "</select>";// fecha lista

    //$pessoa = $_GET['nome'];
    $num_conta = $_POST['num_conta'];

   $sql1 = "INSERT INTO contas(pessoa, num_conta)
   VALUES ('$pessoa', '$num_conta')";

    if(mysqli_query($conexao, $sql1)){
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
        echo "terminou cadastro de conta";


    mysqli_close($conexao);
?>