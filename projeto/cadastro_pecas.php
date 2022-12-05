<?php
    if(isset($_POST['submit'])){
        print_r($_POST['periferico']);
        print_r($_POST['interface']);
        print_r($_POST['estado']);
        print_r($_POST['quantidade']);

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
    <title>Document</title>
</head>
<body>
    <form method="POST" autocomplete="on">
        Periferico: <input type="text" name="periferico" id="periferico" maxlength="45">
        Interface: <input type="text" name="interface" id="interface" maxlength="45">
        Estado: <input type="text" name="estado" id="estado" maxlength="45">
        Quantidade: <input type="number" name="quantidade" id="quantidade">
        <input type="submit" id="cadastrar" value="Cadastrar" name="submit">
    </form>
</body>
</html>