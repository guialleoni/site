<!DOCTYPE html>
<html>
	<head>
		<title>Aula 08</title>
		<meta charset="UTF-8"/>
        <link rel="Stylesheet" href="estilo.css" type="text/css"/>
	</head>
	<body>
		<?php
            $nome = strip_tags ($_POST['nome']);
            $senha = strip_tags ($_POST['senha']);

            $nomePermitido = "admin";
            $senhaPermitida = "admin";

            
            if (strcmp($nome, $nomePermitido)==0 && strcmp($senha, $senhaPermitida)==0){
                header('Location: paginaOK.php');
            }
            else{
                header('Location: paginaERRO.php');
            }
		?>
	</body>
</html>