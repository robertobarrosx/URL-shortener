<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$link = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);
$short     = filter_input(INPUT_POST, 'short_url'  , FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM short WHERE short LIKE '$short'";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0)) {
	echo "jatem";
}else{
	$sql = "INSERT INTO short (link, short) VALUES ('$link', '$short')";
	if (mysqli_query($conn, $sql)){
		echo "certo";
	} else {
   		echo "Ocorreu Algum erro tente novamente.";
	}
}
