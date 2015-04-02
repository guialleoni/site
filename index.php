<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <header>
            <div>
                <form action="verificaLogin.php" method="post">
                    Nome:<input type="text" name="nome"/>
                    Senha:<input type="password" name="senha"/>
                    <input id="submeter" type="submit" value="Login"/>
                </form>
            </div>
        </header>
        <container>  
            <figure><img alt="logo" src="img/logo.png"/></figure>
            <h2>The zuera never ends, graças a Deus&trade;!</h2>
            <section>
                <h3>Cadastre-se:</h3>
                <form action="cadastro.php" method="POST">
                    <div class="formbox">
                        <span class="left">Usuário:</span><input type="text" class="right" name="nome"/><br/>
                        <span class="left">Senha:</span><input type="password" class="right" name="password"/><br/>
                        <span class ="left"><input id="send" type="submit" value="Enviar"/></span><br/>
                    </div><br/>
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