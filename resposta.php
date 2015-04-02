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
        ?>


        <form action="resposta2.php" method="post">
            <p>Nome completo:<input type="text" name="nomecompleto"/></p><br>
            <p>email:<input type= "email" name="email"/></p><br>
            <p>Data de Nascimento:<input type= "date" name="data"/></p><br>
            <input type="file" name="arquivo"/>
            <input type="submit" value="Prosseguir>>>"/><br>
            <input type="hidden" name="MAX_SIDE_FILE" value="100000">
            


        <?php
            echo "<input type='hidden' name='nome' value=".$nome."/></p><br>";
            echo" <input type='hidden' name='senha' value=".$senha."/></p><br>";
            echo "<input type='hidden' name='senha2' value=".$confirm."/></p><br>";
        ?>
        </form>
    </body>
</html>