<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$short = filter_input(INPUT_POST, 'short_url'  , FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM short WHERE short LIKE '$short'";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0)) {
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo $row_user['link'];
	}
}else{
	echo "nada";
}
