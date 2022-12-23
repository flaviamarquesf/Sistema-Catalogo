<?php
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $tipo = $_POST['tipo'];
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $memoria = $_POST['memoria'];
        $disco = $_POST['disco'];
        $cpu = $_POST['cpu'];
        $so = $_POST['so'];
        $quantidade = $_POST['quantidade'];

        $result = mysqli_query($conexao, "INSERT INTO computadores_em_uso(tipo, fabricante, modelo, memoria, disco, cpu, so, quantidade) VALUES('$tipo', '$fabricante', '$modelo', '$memoria', '$disco', '$cpu', '$so', '$quantidade')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulario_pcs_em_uso.css">
    <title id="titulo">Cadastro de Computadores</title>
    <link rel="icon" type="image" href="imagens/computadores.png">
</head>
<body>
    <form action="cadastro_pcs_em_uso.php" method="POST" autocomplete="on" class="form">
        <h1 id="titulo"> Computadores </h1>
        <div class="campo">
            <strong>
            <label>
            Tipo: <input type="text" name="tipo" id="tipo" maxlength="45" required >
            </label>
            <label>
            Fabricante: <input type="text" name="fabricante" id="fabricante" maxlength="45" required>
            </label>
            <label>
            Modelo: <input type="text" name="modelo" id="modelo" maxlength="45"required >
            </label>
            <label>
            Memoria: <input type="text" name="memoria" id="memoria" maxlength="45" required>
            </label>
            <label>
            Disco: <input type="text" name="disco" id="disco" maxlength="45" required>
            </label>
            <label>
            CPU: <input type="text" name="cpu" id="cpu" maxlength="45" required>
            </label>
            <label>
            SO: <input type="text" name="so" id="so" maxlength="45" required>
            </label>
            <label>
            Quantidade: <input type="number" name="quantidade" id="quantidade" required>
            </label>
            </strong>
        </div>
        <button class="botao" type="submit" id="cadastrar" name="submit">  Cadastrar </button>
    </form>

</body>
</html>