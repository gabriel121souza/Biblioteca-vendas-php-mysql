<?php
	
	session_start();
	if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar</title>
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background: #Bffff	;">
				<h2>Cadastrar Livros</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="createLivro.php">
					<!--<label>Nome</label>-->
					<input type="text" name="nome" placeholder="Digite o nome do livro" class="form-control"><br>
					
					<!--<label>E-mail</label>-->
					<input type="text" name="editora" placeholder="editora" class="form-control"><br>
					
					<!--<label>Usuário</label>-->
					<input type="text" name="autor" placeholder="Digite o autor" class="form-control"><br>
						<!--<label>Usuário</label>-->
					<input type="text" name="descricao" placeholder="Digite a descricao" class="form-control"><br>
					
						<!--<label>Usuário</label>-->
					<input type="text" name="preco" placeholder="Digite o preco" class="form-control"><br>
						
					
					
					<input type="submit" name="btnCadLivro" value="Cadastrar" class="btn btn-success"><br><br>
					
					
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>