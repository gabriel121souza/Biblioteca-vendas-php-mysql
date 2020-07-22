<?php
session_start();

include_once("conexao.php");
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);



//echo "nome: $nome<br>";
//echo"e-mail: $email<br>";

$result_usuario = "UPDATE livros SET nome='$nome', editora='$editora', autor='$autor', descricao='$descricao', preco='$preco' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>usuario editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>falha ao editar</p>";
	header("Location: editarLivro.php?id=$id");
}