<?php
	$username = ($_POST['username']);
	$senha = ($_POST['senha']);

	include "read.php";
    $senha_temp = buscaSenha($username);

    if (strcmp($senha, $senha_temp) == 0 ){
		header("Location: resposta.php?username=$username");  
    }
	else{
        header("Location: erro.php");     
    }
    
?>
