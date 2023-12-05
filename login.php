<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
			
			width: 500px;
		}
		#tamanhoContainer button{
			color: var(--color-dark1);
			background-color: var(--color-purple);
			
		}
		
	</style>
</head>
<body>
<div class="container" id ="tamanhoContainer" style="margin-top: 40px;">
	<h4>LOGIN</h4>
	<form action="site.php" method="post" style="margin-top: 20px">
    <div class="mb-3">
	    	<label >Email</label>
	    	<input type="E-mail" class="form-control" name="Email" placeholder="Insira o seu E-mail" required>
		</div>
		<div class="mb-3">
	    	<label >Senha</label>
	    	<input type="password" class="form-control" name="senha" placeholder="Insira sua senha" required>
		</div>
        <div style="text-align: right;">
		<button type="submit" class="btn btn-dark">Login</button>
		</div>
</body>
</html>