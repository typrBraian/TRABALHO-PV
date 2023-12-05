<?php

include 'conexao.php';

$nome = $_POST['nome'];
$Email = $_POST['Email'];
$senha = $_POST['senha'];
$dataNas = $_POST['dataNas'];

$query = "CREATE TABLE IF NOT EXISTS estoque(
	id_estoque int not null auto_increment,
	nome varchar (100) not null,
	Email varchar(255) not null,
	senha varchar(255) not null,
	dataNas int not null,
	primary key(id_estoque)

)";
$executar = mysqli_query($conexao, $query);

$sql = "INSERT INTO `estoque`( `nome`, `Email`, `senha`, `dataNas`) VALUES ('$nome','$Email','$senha','$dataNas')";
$inserir = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	

</head>
<body>
<div class = "container"  style="width: 500px">
<div class = "container"  style="width: 500px">
	<br>
	<center>
	<h4>Usuário Cadastrado com sucesso</h4>
	<div style="padding-top: 20px">
		
			<a href="cadastro.php" role = "button" class="btn btn-sm btn-primary">Cadastrar novo usuário</a>	
		</center>
<br><br>
		<center>
	<h4>Lista de cadastros</h4>
	<div style="padding-top: 20px">
		
			<a href="listar_produtos.php" role = "button" class="btn btn-sm btn-primary">Entrar</a>	
		</center>
	</div>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>