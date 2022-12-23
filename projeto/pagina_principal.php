<?php
     include_once('conexao.php');
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu em CSS Dropdown Horizontal - Linha de Código</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="pagina_principal.css">
</head>
<body>
    
        <div class="menu">
            <h1 class="titulo"> Início </h1>
            <h3>Laboratorio em manutenção</h3>
            <button onclick="exibirTabela(table1)">
                Computadores em uso
            </button>
            <button onclick="exibirTabela(table2)">
                Peças
            </button>
            <button onclick="exibirTabela(table3)">
                Ferramentas
            </button>
        </div>
<div id="table1" style="display:none;">
                <div class="funcoes">
                    <div class="pesquisa">
                        <input type="search" placeholder="Pesquisar" id="pesquisar">
                        <button onclick="searchData()">
                            <i class='fa fa-search'></i>
                        </button>
                    </div>
                    <button class="botao"><a href="cadastro_pcs_em_uso.php">Cadastrar</a> </button>
                </div>
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
                if(!empty($_GET['search']))
                {
                    $data = $_GET['search'];
                    $sql_query1 = "SELECT * FROM computadores_em_uso WHERE tipo LIKE '%$data%' or so LIKE '%$data%' or modelo LIKE '%$data%' ORDER BY id DESC";
                }
                else{
                    $sql_query1 = "SELECT * FROM computadores_em_uso ORDER BY id";
                }
                    
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
                    echo "<td>
                            <a href='#'><i class='fa fa-edit'></i></a>
                            <a href='deletar_pcs.php?id=$cadastro_data[id]'><i class='fa fa-trash'></i></a>
                        </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
	</table>
</div>

<div id="table2" style="display:none;">
                <div class="funcoes">
                    <div class="pesquisa">
                        <input type="search" placeholder="Pesquisar" id="pesquisar">
                        <button onclick="searchData()">
                            <i class='fa fa-search'></i>
                        </button>
                    </div>
                    <button ><a href="cadastro_pecas.php">Cadastrar</a> </button>
                </div>
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
                if(!empty($_GET['search']))
                {
                    $data = $_GET['search'];
                    $sql_query1 = "SELECT * FROM pecas WHERE periferico LIKE '%$data%' or interface LIKE '%$data%' or estado LIKE '%$data%' ORDER BY id DESC";
                }
                else{
                    $sql_query1 = "SELECT * FROM pecas ORDER BY id";
                }
                    
                    $result = $conexao->query($sql_query1);

                while($cadastro_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$cadastro_data['periferico']."</td>";
                    echo "<td>".$cadastro_data['interface']."</td>";
                    echo "<td>".$cadastro_data['estado']."</td>";
                    echo "<td>".$cadastro_data['quantidade']."</td>";
                    echo "<td>
                            <a href='#'><i class='fa fa-edit'></i></a>
                            <a href='deletar_pecas.php?id=$cadastro_data[id]'><i class='fa fa-trash'></i></a>
                        </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>

	</table>
</div>

<div id="table3" style="display:none;">
            <div class="funcoes">
                    <div class="pesquisa">
                        <input type="search" placeholder="Pesquisar" id="pesquisar">
                        <button onclick="searchData()">
                            <i class='fa fa-search'></i>
                        </button>
                    </div>
                    <button ><a href="cadastro_ferramentas.php">Cadastrar</a></button>
            </div>
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
               if(!empty($_GET['search']))
               {
                   $data = $_GET['search'];
                   $sql_query1 = "SELECT * FROM ferramentas WHERE ferramenta LIKE '%$data%' ORDER BY id DESC";
               }
               else{
                   $sql_query1 = "SELECT * FROM ferramentas ORDER BY id";
               }
                   
                   $result = $conexao->query($sql_query1);

                while($cadastro_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$cadastro_data['ferramenta']."</td>";
                    echo "<td>".$cadastro_data['fabricante']."</td>";
                    echo "<td>".$cadastro_data['quantidade']."</td>";
                    echo "<td>
                            <a href='editar_ferramentas.php?id=$cadastro_data[id]'><i class='fa fa-edit'></i></a>
                            <a href='deletar_ferramenta.php?id=$cadastro_data[id]'><i class='fa fa-trash'></i></a>
                        </td>";
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
    let search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });
    function searchData(){
        window.location = 'pagina_principal.php?search='+search.value;
    }
</script>
</body>
</html>