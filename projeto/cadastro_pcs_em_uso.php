<?php
    if(isset($_POST['submit'])){
        print_r($_POST['tipo']);
        print_r($_POST['fabricante']);
        print_r($_POST['modelo']);
        print_r($_POST['memoria']);
        print_r($_POST['disco']);
        print_r($_POST['cpu']);
        print_r($_POST['so']);
        print_r($_POST['quantidade']);

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
    <title>Document</title>
</head>
<body>
    <h1>TESTE</h1>
    <form action="cadastro_pcs_em_uso.php" method="POST" autocomplete="on">
        <div class=campo>
            Tipo: <input type="text" name="tipo" id="tipo" maxlength="45" >
        </div>
        <div class=campo>
            Fabricante: <input type="text" name="fabricante" id="fabricante" maxlength="45" >
        </div>
        <div class=campo>
            Modelo <input type="text" name="modelo" id="modelo" maxlength="45" >
        </div>
        <div class=campo>
            memoria <input type="text" name="memoria" id="memoria" maxlength="45" >
        </div>
        <div class=campo>
            Disco: <input type="text" name="disco" id="disco" maxlength="45" >
        </div>
        <div class=campo>
            CPU: <input type="text" name="cpu" id="cpu" maxlength="45" >
        </div>
        <div class=campo>
            SO: <input type="text" name="so" id="so" maxlength="45" >
        </div>
        <div class=campo>
            Quantidade: <input type="number" name="quantidade" id="quantidade">
        </div>
        <input type="submit" id="cadastrar" value="Cadastrar" name="submit">
    </form>

</body>
</html>