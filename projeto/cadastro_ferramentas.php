<?php
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $ferramenta = $_POST['ferramentas'];
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
    <link rel="stylesheet" type="text/css" href="formulario_ferramentas.css">
    <title>Cadastro de Ferramentas </title>
    <link rel="icon" type="image" href="imagens/ferramentas.png">
</head>
<body>
   
    <form method="POST" autocomplete="on" class="form">
       <h1 id="titulo">Ferramentas </h1>
       <div class="campo">
       <label><strong>
        Ferramenta: <input type="text" name="ferramentas" id="ferramenta" maxlength="45" required> 
       </label>
       <br>
       <label>
        Fabricante: <input type="text" name="fabricante" id="fabricante" maxlength="45" required> 
       </label>
       <br> 
       <label>
        Quantidade: <input type="number" name="quantidade" id="quantidade" required> 
       </label>
       </strong>
       <br> 
       </div>
       <br>
       <button class="botao" type="submit" id="cadastrar" name="submit">  Cadastrar </button>
 
    </form>
</body>
</html>