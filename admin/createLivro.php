<?php
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);



//echo "nome: $nome<br>";
//echo"e-mail: $email<br>";

$result_livro = "INSERT INTO livros(nome, editora, autor, descricao, preco) VALUES ('$nome', '$editora', '$autor','$descricao','$preco')";
$resultado_livro = mysqli_query($conn, $result_livro);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>livro cadastrado com sucesso</p>";
	header("Location: ../admin/index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>falha ao cadastrar</p>";
	header("Location: cadastrarLivro.php");
}