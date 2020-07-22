<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
$result_livro = "SELECT * FROM livros WHERE id ='$id'";
$resultado_livro = mysqli_query($conn, $result_livro);
$row_livro = mysqli_fetch_assoc($resultado_livro);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
	<title> Crud - Editar</title>
</head>
<body>
	<div class="container">
			<div class="form-signin" style="background: blue	;">
				<h2>Cadastrar Livros</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
<form method="POST" action="editarLivro.php">

<input type="hidden" name="id" value="<?php echo $row_livro['id']; ?>"> <br>

<label>Nome: </label>
<input type="text" name="nome" placeholder="digite o nome do livro" value="<?php echo $row_livro['nome']; ?>" class="form-control"> <br>
					
<label>editora: </label>
<input type="text" name="editora" placeholder="editora" value="<?php echo $row_livro['editora']; ?>" class="form-control"> <br>

	<label>autor: </label>
<input type="text" name="autor" placeholder="autor" value="<?php echo $row_livro['autor']; ?>" class="form-control"> <br>

	<label>descricao: </label>
<input type="text" name="descricao" placeholder="descricao" value="<?php echo $row_livro['descricao']; ?>" class="form-control"> <br>

	<label>preco: </label>
<input type="text" name="preco" placeholder="preco" value="<?php echo $row_livro['preco']; ?>" class="form-control"><br>

<input  class="btn btn-primary" type="submit" value="editar">
	<input  class="btn btn-danger"  href="index.php" type="submit" value="voltar">
</form>
	</div>
	</div>
	</body>
	