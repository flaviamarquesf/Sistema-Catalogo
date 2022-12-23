<?php
    if(isset($_POST['submit'])){
       
        include_once('conexao.php');

        $periferico = $_POST['periferico'];
        $interface = $_POST['interface'];
        $estado = $_POST['estado'];
        $quantidade = $_POST['quantidade'];

        $result = mysqli_query($conexao, "INSERT INTO pecas(periferico, interface, estado, quantidade) VALUES ('$periferico', '$interface', '$estado', '$quantidade')");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formulario_pecas.css">
    <title id="titulo">Cadastro de Peças</title>
    <link rel="icon" type="image" href="imagens/peças.png">
</head>
<body>
    <form method="POST" autocomplete="on" class="form">
        <h1 id="titulo"> Peças </h1>
        <div class="campo">
        <strong>
        <label> 
        Periferico: <input type="text" name="periferico" id="periferico" maxlength="45" required>
        </label>
        <br>
        <label>
        Interface: <input type="text" name="interface" id="interface" maxlength="45" required>
        </label>
        <br>
        <label>
        Estado: <input type="text" name="estado" id="estado" maxlength="45" required>
        </label>
        <br>
        <label>
        Quantidade: <input type="number" name="quantidade" id="quantidade" required>
        </label> 
        </strong>
        </div>
        <br>

        <button class="botao" type="submit" id="cadastrar" name="submit">  Cadastrar </button>
    </form>
</body>
</html>