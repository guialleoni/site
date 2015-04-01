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
                <form onsubmit="cadastro(this); return false;" method="POST">
                    <div class="formbox">
                        <span class="left">Usuário:</span><input type="text" class="right" name="nome"/><br/>
                        <span class="left">Senha:</span><input type="password" class="right" name="password"/>
                        <span class ="left"><input id="send" type="submit" value="Enviar"/></span><br/>
                    </div>
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