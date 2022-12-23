<?php
    if(!empty($_GET['id'])){

        include_once('conexao.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM ferramentas WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        print_r($result);

        /*if($result->num_rows > 0){
            while($ferramenta_data = mysqli_fetch_assoc($result)){
                $ferramenta = $ferramenta_data['ferramenta'];
                $fabricante = $ferramenta_data['fabricante'];
                $quantidade = $ferramenta_data['quantidade'];
                
            }
            print_r($ferramenta);
        }else{
            header('Location: pagina_principal.php');
        }*/

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar ferramenta</title>
</head>
<body>
    <form action="pagina_principal.php" method="POST" autocomplete="on">
        Ferramentas: <input type="text" name="ferramenta" id="ferramenta" maxlength="45" >
        Fabricante: <input type="text" name="fabricante" id="fabricante" maxlength="45" >
        Quantidade: <input type="number" name="quantidade" id="quantidade" >
        <input type="submit" id="cadastrar" name="submit" value="Cadastrar">

    </form>
</body>
</html>