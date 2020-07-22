<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 *-->
<?php include_once("conexao.php");
$id_livro = $_GET['id_livro'];
$result_livros = "SELECT * FROM livros WHERE id='$id_livro'";
$resultado_livros = mysqli_query($conn, $result_livros);
$row_livros = mysqli_fetch_assoc($resultado_livros);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_livros['nome']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Conteúdo</a></li>
				<li role="presentation"><a href="#editora" aria-controls="editora" role="tab" data-toggle="tab">Editora</a></li>
				<li role="presentation"><a href="#autor" aria-controls="autor" role="tab" data-toggle="tab">Autor</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<?php echo $row_livros['descricao']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="editora">
					<?php echo $row_livros['editora']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="autor">
					<?php echo $row_livros['autor']; ?>
				</div>
				
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>