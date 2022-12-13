<?php
     include_once('conexao.php');
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu em CSS Dropdown Horizontal - Linha de Código</title>
</head>
<body>
<nav>
  <ul class="menu">
		<li id="inicio" onclick="exibirTabela(imagemInicio)"><a href="#">Laboratorio em manutenção</a></li>
		<li id="tabela1" onclick="exibirTabela(table1)"><a href="#" >Computadores em uso</a></li>
		<li id="tabela2" onclick="exibirTabela(table2)"><a href="#" >Peças</a></li>
		<li id="tabela3" onclick="exibirTabela(table3)"><a href="#" >Ferramentas</a></li>
</ul>
</nav>
<div class="container" id="imagemInicio">
	<img src="https://s1.static.brasilescola.uol.com.br/be/vestibular/-5be58412af2ac.jpg" alt="logo">
</div>
<div id="table1" style="display:none;">
	<button ><a href="formulario_pcs_em_uso.html">Cadastrar</a> </button>
	<table border="1">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Memória</th>
                <th>Disco</th>
                <th>CPU</th>
                <th>Sistema operacional</th>
                <th>Quantidade</th>
                <th>- - -</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //include_once('conexao.php');
                $sql_query1 = "SELECT * FROM computadores_em_uso ORDER BY id";
                $result = $conexao->query($sql_query1);

                while($cadastro_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$cadastro_data['tipo']."</td>";
                    echo "<td>".$cadastro_data['fabricante']."</td>";
                    echo "<td>".$cadastro_data['modelo']."</td>";
                    echo "<td>".$cadastro_data['memoria']."</td>";
                    echo "<td>".$cadastro_data['disco']."</td>";
                    echo "<td>".$cadastro_data['cpu']."</td>";
                    echo "<td>".$cadastro_data['so']."</td>";
                    echo "<td>".$cadastro_data['quantidade']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
	</table>
</div>

<div id="table2" style="display:none;">
	<button ><a href="formulario_pecas.html">Cadastrar</a> </button>
	<table border="1" >
        <thead>
            <tr>
                <th>Periférico</th>
                <th>Interface</th>
                <th>Estado</th>
                <th>Quantidade</th>
                <th>- - -</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql_query1 = "SELECT * FROM pecas ORDER BY id";
                $result = $conexao->query($sql_query1);

                while($cadastro_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$cadastro_data['periferico']."</td>";
                    echo "<td>".$cadastro_data['interface']."</td>";
                    echo "<td>".$cadastro_data['estado']."</td>";
                    echo "<td>".$cadastro_data['quantidade']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>

	</table>
</div>

<div id="table3" style="display:none;">
	<button ><a href="formulario_ferramentas.html">Cadastrar</a></button>
	<table border="1" >
        <thead>
            <tr>
                <th>Ferramenta</th>
                <th>Fabricante</th>
                <th>Quantidade</th>
                <th>- - -</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql_query1 = "SELECT * FROM ferramentas ORDER BY id";
                $result = $conexao->query($sql_query1);

                while($cadastro_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$cadastro_data['ferramenta']."</td>";
                    echo "<td>".$cadastro_data['fabricante']."</td>";
                    echo "<td>".$cadastro_data['quantidade']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
		
	</table>
</div>

<script>
 function exibirTabela(table){
	
   if(table.style.display == "none") { 
	table1.style.display="none";
	table2.style.display="none";
	table3.style.display="none";
    
	table.style.display="block" 
 }
 else { 
   table.style.display="none"; 
 }
}
</script>
</body>
</html>