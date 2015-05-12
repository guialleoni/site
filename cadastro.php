<?php
	ini_set('default_charset', 'UTF-8');
	if(isset($_POST['send'])){
		$nome=$_POST['firstname'];
		$username=$_POST['username'];
		$senha=$_POST['psw'];
		$confirm=$_POST['spsw'];
		$sobrenome=$_POST['lastname'];
		$email=$_POST['email'];
		$confirmEmail=$_POST['semail'];
		$data=$_POST['birthday'];
		//1º. Definir os parâmetros de teste
		$tamanho_maximo = 100000; //em bites
		$tipos_aceitos = array("image/gif",
                                   "image/x-png",
                                   "image/bmp",
                                   "image/jpeg");
		//2º. Validar o arquivo enviado
		$arquivo = $_FILES['arquivo'];
		
		if ($arquivo['error'] != 0){
                echo 'Erro no upload do arquivo<br/>';
                switch($arquivo['error']){
                    case UPLOAD_ERR_INI_SIZE:
                        echo 'O Arquivo excede o tamanho máximo permitido';
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        echo 'O Arquivo enviado é muito grande';
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        echo 'O upload não foi completado';
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        echo 'Nenhum arquivo foi informado para upload';
                        break;
                }
                
				if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL){
                    echo "Nenhum arquivo enviado";
                    exit;
                }
                if($arquivo['size']>$tamanho_maximo){
                    echo "O Arquivo enviado é muito grande";
                    exit;
                }
                
                if(array_search($arquivo['type'], $tipos_aceitos)===FALSE){
                    echo "O Arquivo enviado não é do tipo";
                    exit;
                }
                exit;
            }
			
			//Agora podemos copiar o arquivo enviado
			$destino = 'C:\\xampp\\htdocs\\site\\image\\' .$arquivo['name'];
		
		if(empty($nome)){
			$erro = 'Prenche logo a porra do nome!';
		}
		else if(empty($sobrenome)){
			$erro = 'Prenche logo a porra do sobrenome!';
		}
		else if(empty($sobrenome)){
			$erro = 'Prenche logo a porra do sobrenome!';
		}
		else if(empty($username)){
			$erro = 'Prenche logo a porra do usuário!';
		}
		else if(empty($data)){
			$erro = 'Prenche logo a porra do nascimento!';
		}
		else if(empty($senha)){
			$erro = 'A senha tem q ser preenchida!';
		}
		else if(empty($email)){
			$erro = 'O email tem q ser preenchido!';
		}
		else if($senha != $confirm){
			$erro = 'As senhas tem q ser iguáis, imbecil!';
		}
		else if($email != $confirmEmail){
			$erro = 'Os e-mails tem q ser iguáis, imbecil!';
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$erro = 'Preencha a porra do e-mail certo';
		}
		else if(!filter_var($confirmEmail, FILTER_VALIDATE_EMAIL)){
			$erro = 'Preencha a porra do e-mail certo';
		}
		
		else{
			  
			echo $dataCadastro = date('Y-m-d H:i:s');
			include "resposta2.php";
			$sql = "INSERT INTO cadastro (nome , sobrenome, usuario, senha, nascimento, email, dataCadastro, imagens) VALUES ('$nome', '$sobrenome', '$username', '$senha', '$data', '$email', '$dataCadastro', '$destino')";
			
			$resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));;
			  
			if($resultado){
					echo '
						<script type="text/javascript">
							alert("Sucesso");
						</script>
					';
				}
			else{
				echo '
						<script type="text/javascript">
							alert("Fracasso");
						</script>
					';
			}
			mysqli_close($conexao);
			  /*
			  
			  $sql = mysql_query("
					INSERT INTO cadastro  
					value(
						NULL,
						'{$nome}',
						'{$sobrenome}',
						'{$username}',
						'{$email}',
						'{$senha}',
						'{$data}',
						'{$dataCadastro}'
					)
				");
				
				*/
				
				
		}							

		if(isset($erro)):
			echo $erro.'<br />';
		endif;
		
		if(!file_exists("image")):
			mkdir("image", 0777, true);
        endif;

		if(move_uploaded_file($arquivo['tmp_name'], $destino)){
		//Tudo Ok, mostramos dos dados

			echo 'O Arquvo foi carregado com sucesso para ' .$destino.'!';
			echo "<img src='image/".$arquivo['name']."' alt='imagem'/>";

        }

		else{
			echo 'Ocorreu um erro durante o upload';   
		}
	}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>cadastro</title>
        <link rel="stylesheet" type="text/css" href="style2.css" />
    </head>
    <body>
        <header>
            <figure><img alt="logo" src="img/logo.png"/></figure>
        </header>
        <container>
		
            <h2>The zuera never ends, graças a Deus&trade;!</h2>
            <section>
                <h3>Cadastre-se:</h3>
                <!--<form method="post" enctype="multipart/form-data" action="resposta2.php">-->
				<form method="post" enctype="multipart/form-data" action="">
                    <p><label for="firstname" >Nome:</label> <input type="text" name="firstname" id="firstname"/></p><br>
                    <p><label for="lastname" >Sobrenome:</label> <input type="text" name="lastname" id ="lastname"/></p><br>
                    <p><label for="username" >Nome de usuário:</label> <input type="text" name="username" id ="username"/></p><br>
                    <p><label for="psw" >Senha:</label> <input type="password" name="psw" id ="psw"/></p><br>
                    <p><label for="spsw" >Confirme a senha:</label> <input type="password" name="spsw" id ="spsw"/></p><br>
                    <p><label for="birthday" >Data de nascimento:</label> <input type="date" name="birthday" id ="birthday"/></p><br>
                    <p><label for="email" >E-Mail:</label> <input type="email" name="email" id ="email"/></p><br>
                    <p><label for="semail" >Confirme seu E-Mail:</label> <input type="email" name="semail" id ="semail"/></p><br>
                    <fieldset>
                        <legend>
                            Upload de foto
                        </legend>
                        <input type="hidden" name="MAX_SIDE_FILE" value="100000">
                        <input type="file" name="arquivo"/>
                        <br/>
                        <br/>
                        
                    </fieldset>
                        
                    <input type="submit" value="ENVIAR" name="send"/>
					
                </form>
            </section>
            <footer>
                <nav>
                    <ul>
                        <li><a href="index.php">Casa</a>|</li>
                        <li><a href="humor.php">Humor</a>|</li>
                        <li><a href="about.php">Sobre</a>|</li>
                        <li><a href="contato.php">Contato</a>|</li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                    </ul>
                </nav>
                Copyright &copy; Patrick, Bruno e Guilherme 2015
            </footer>
        </container>
    </body>
</html>
