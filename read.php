<?php
	function buscaSenha($username){
		//1. Criar conexão
		include "resposta2.php";

		//2. Criar e executar a query SQL
		$sql = "SELECT senha FROM cadastro WHERE usuario='$username'";			
		$resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
			
		//3. Mostra os resultados
		$senha = "";
        if($resultado){
			while ($row = mysqli_fetch_array($resultado)){
				$senha = $row['senha'];
			}
		}
		
		else{
			echo "nenhum usuário encontrado";
		}
			
		//4. Fechar conexão
		mysqli_close($conexao);
		
		return $senha;
}
		
function buscaId($username){

        //1. Cria conexão
       include "resposta2.php";

        //2. Cria query
        $sql = "SELECT id FROM cadastro WHERE usuario='$username'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $id = -1;
        if($resultado){
            while($row = mysqli_fetch_array($resultado)){
                $id = $row['id'];
            }
        } else {
            echo "nenhum usuário encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $id;
        
    }
/*
function buscaPost($username){
	
        $id = buscaId($username);

        //1. Cria conexão
        include "resposta2.php";

        //2. Cria query
        $sql = "UPDATE cadastro SET senha='$psw' WHERE id='$id'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $cont = 0;
        $posts = [];
        if($resultado)
        {
            while($row = mysqli_fetch_array($resultado)){
                $posts[$cont] = $row['texto'];
                $cont++;
            }
        } else {
            echo "nenhum post encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $posts;
        
    }
?>
*/
