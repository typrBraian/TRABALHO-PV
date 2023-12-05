<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		:root {
      --color-white: #fff;
      --color-dark1: rgb(39, 39, 39);
      --color-dark2: #2d2d2d;
      --color-dark3: #414141;
      --color-dark4: #1c1c1c;
      --color-dark5: #343434;
      --color-purple: #b040ff;
    }

		div{
			color: var(--color-purple);
		}
		body{
			background-color: var(--color-dark1);
		}
		#tamanhoContainer{
			
			width: 600px;
			position: relative;
			top: 250px;
			height: 300px;
			
		}
		#tamanhoContainer button{
			color: var(--color-dark1);
			background-color: var(--color-purple);
			
		}
	</style>

</head>
<body>
<div class="container" id ="tamanhoContainer" style="margin-top: 40px;">
	<form action="index.html" method="post" style="margin-top: 20px">
		<div class="mb-3">
	    	<label >Nome</label>
	    	<input type="text" class="form-control" name="nome" placeholder="Insira o seu Nome" required>
		</div>
		<div class="mb-3">
	    	<label >Email</label>
	    	<input type="E-mail" class="form-control" name="Email" placeholder="Insira o seu E-mail" required>
		</div>
		<div class="mb-3">
	    	<label >Senha</label>
	    	<input type="password" class="form-control" name="senha" placeholder="Insira sua senha" required>
		</div>
		
		<div class="mb-3">
	    	<label >Data de Nascimento</label>
	    	<input type="date" class="form-control" name="dataNas">
		</div>
		
		<div style="text-align: right;">
		<button type="submit" class="btn btn-dark">Cadastro</button>
		</div>
	</form>
</div>












<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>