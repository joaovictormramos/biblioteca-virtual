<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Vitrual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div>
        <?php if(!empty($_GET['msgErro'])){?>
        <div class="alert alert-primary" role="alert">
        <?php echo $_GET['msgErro']; ?>
        </div>
        <?php } ?>

        <?php if(!empty($_GET['msgSucesso'])){?>
            <div class="alert alert-info" role="alert">Conta criada com sucesso.
                <?php echo $_GET['msgSucesso']; ?>
            </div>
        <?php } ?>
    </div>
    <header>
        <h1 id="titulo">BIBLIOTECA VIRTUAL</h1>
        <div >
            <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
                <a class="navbar-brand" href="index.html">
                    <img src="i/bIBLIOTECAvIRTUAL_logo.png" alt="Biblioteca Vit=rtual Logo" style="width:40px;" class="rounded-pill"> 
                </a>
                <a class="navbar-brand" href="acervo.php">Acervo</a>
                <a class="navbar-brand" href="servico.php">Serviços</a>
                <a class="navbar-brand" href="contato.php">Contato</a>

                <form method="post" action="entrar.php">
                    <label for="user">Nome de Usuário</label>
                    <input type="text" name="user" required>
	
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" maxlength="50" required> 
                    <button class="btn btn-success">Entrar</button>
                </form>

                <a class="btn btn-primary" href="criarconta.php">Criar Conta</a>
                <form method="post" action="" class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Buscar livro">
                    <button class="btn btn-primary" type="button">Buscar</button>
                </form>       
            </nav> 
        </div>
    </header>
    <?php echo(date("l d/m/Y H:i:s"))?>
    <main>
    </main>

    <footer>
        HORÁRIO DE FUNCIONAMENTO: SEG-SEX DAS 07:00 ÀS 17:00<br>
        <a href="bibliotecavirtual">LOGOINSTAGRAM</a>
    </footer>
</body>
</html>