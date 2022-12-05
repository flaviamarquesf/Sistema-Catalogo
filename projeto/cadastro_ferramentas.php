<?php
    if(isset($_POST['submit'])){
        print_r($_POST['ferramenta']);
        print_r($_POST['fabricante']);
        print_r($_POST['quantidade']);

        include_once('conexao.php');

        $ferramenta = $_POST['ferramenta'];
        $fabricante = $_POST['fabricante'];
        $quantidade = $_POST['quantidade'];

        $result = mysqli_query($conexao, "INSERT INTO ferramentas(ferramenta, fabricante, quantidade) VALUES ('$ferramenta', '$fabricante', '$quantidade')");
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
    <form action="cadastro_ferramentas.php" method="POST" autocomplete="on">
        Ferramentas: <input type="text" name="ferramenta" id="ferramenta" maxlength="45">
        Fabricante: <input type="text" name="fabricante" id="fabricante" maxlength="45">
        Quantidade: <input type="number" name="quantidade" id="quantidade">
        <input type="submit" id="cadastrar" name="submit" value="Cadastrar">

    </form>
</body>
</html>