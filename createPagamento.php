<?php
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);
$livro = filter_input(INPUT_POST, 'livro', FILTER_SANITIZE_STRING);
$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_FLOAT);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$formapagamento = filter_input(INPUT_POST, 'formapagamento', FILTER_SANITIZE_STRING);
$banco = filter_input(INPUT_POST, 'banco', FILTER_SANITIZE_STRING);
$parcelas = filter_input(INPUT_POST, 'parcelas', FILTER_SANITIZE_STRING);
$nometitular = filter_input(INPUT_POST, 'nometitular', FILTER_SANITIZE_STRING);
$validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING);
$cvv = filter_input(INPUT_POST, 'cvv', FILTER_SANITIZE_STRING);



//echo "nome: $nome<br>";
//echo"e-mail: $email<br>";

$result_livro = "INSERT INTO compras(nome, cpf, valor, livro, logradouro, numero, bairro, cidade, estado, cep, formapagamento, banco, parcelas, nometitular,validade, cvv) VALUES ('$nome', '$cpf', '$valor','$livro', '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$formapagamento', '$banco', '$parcelas', '$nometitular','$validade', '$cvv')";
$resultado_livro = mysqli_query($conn, $result_livro);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>livro cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>falha ao cadastrar</p>";
	header("Location: createPagamento.php");
}