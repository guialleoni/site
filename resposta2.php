<!DOCTYPE html>
<html>

    <head>
        <title>Formulario1</title>
    </head>

    <body>

        <?php

        $nome=$_POST['nome'];
        $senha=$_POST['senha'];
        $confirm=$_POST['senha2'];
        $nomecompleto=$_POST['nomecompleto'];
        $email=$_POST['email'];
        $data=$_POST['data'];



        echo "<h1>Suas informações são:<br>";
        echo $nome."<br>";
        echo $nomecompleto."<br>";
        echo $email."<br>";
        echo $data."<br>";

        $tamanho_maximo = 100000; //em bites
                    $tipos_aceitos = array("image/gif",
                                           "image/x-png",
                                           "image/bmp",
                                           "image/jpeg");

        $arquivo = $_FILES["arquivo"];
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

                    if(!file_exists("image")){
                        mkdir("image", 0777, true);
                    }

                    if(move_uploaded_file($arquivo['tmp_name'], $destino)){
                    //Tudo Ok, mostramos dos dados

                    echo 'O Arquvo foi carregado com sucesso para ' .$destino.'!';
                    echo "<img src='image/".$arquivo['name']."' alt='imagem'/>";

                    }

                    else{
                        echo 'Ocorreu um erro durante o upload';   
                    }

        ?>
    </body>
</html>