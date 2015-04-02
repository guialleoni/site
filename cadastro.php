<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="arquivo.js"></script>
    </head>
    <body>
        <header>
            <div>
                <form onsubmit="login(this); return false;" method="POST">
                    E-mail: <input type="text" name="email">
                    Senha: <input type="password" name="password">
                    <input id="send" type="submit" value="Enviar"/>
                </form>
            </div>  
        </header>
        <container>  
            <figure><img alt="logo" src="img/logo.png"/></figure>
            <h2>The zuera never ends, graças a Deus&trade;!</h2>
            <section>
                <h3>Cadastre-se:</h3>
                <form action="resposta.php" method="post">
                    <p><label for="login" >Login:</label> <input type="text" name="nome" id="login"/></p><br>
                    <p><label for="pass" >Senha:</label> <input type="password" name="senha" id ="pass"/></p><br>
                    <p><label for="pass2" > confirme sua Senha:</label> <input type="password" name="senha2" id ="pass2"/></p><br>
                    <p><input type="submit" value="Prosseguir>>>"/></p><br>
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