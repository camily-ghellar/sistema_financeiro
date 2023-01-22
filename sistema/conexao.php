<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "123.456";
    $dbnome = "ist";
    $port = 3306;

try{
    $conn = new PDO("mysql:host=$servidor; port=$port; dbname=" . $dbnome, $usuario, $senha); //conexão com a porta 3306

    echo "Conexão realizada com sucesso!";
}
catch (PDOException $err){
    echo "Erro na conexão com o banco de dados. Erro:" . $err->getMessage();
}
    


?>