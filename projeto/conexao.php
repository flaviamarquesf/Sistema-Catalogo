<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'estagio2022';
    $dbName = 'appcadastro';

    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);
    /*if($conexao -> connect_errno){
        echo "erro";
    }else{
        echo "sucesso";
    }*/
?>  