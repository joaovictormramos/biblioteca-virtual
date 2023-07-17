<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Vitrual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 id="titulo">BIBLIOTECA VIRTUAL</h1>
        <div class="container">
            <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
                <a class="navbar-brand" href="index.php">
                    <img src="i/bIBLIOTECAvIRTUAL_logo.png" alt="Biblioteca Vit=rtual Logo" style="width:40px;" class="rounded-pill"> 
                </a>
                <a class="navbar-brand" href="acervo.php">Acervo</a>
                <a class="navbar-brand" href="servico.php">Serviços</a>
                <a class="navbar-brand" href="contato.php">Contato</a>
                <a class="btn btn-success" href="entrar.php">Entrar</a>
                <a class="btn btn-primary" href="criarconta.php">Criar Conta</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Buscar livro">
                    <button class="btn btn-primary" type="button">Buscar</button>
                </form>       
            </nav>        
        </div>
    </header>

    <form id="conta"  method="post" action="criar_conta_postgre.php"> 
        <label for="nome">Nome completo</label><br>
        <input type="text" name="nome" required>    <br><br>
    
        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14" required><br><br> 
    
        <label for="data_nasc">Data de nascimento</label><br>
        <input type="date" name="data_nasc" value="2000-01-01"> <br><br>
    
        <label for="user">Nome de Usuário</label><br>
        <input type="text" name="user" required>    <br><br>
	
        <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" maxlength="11" required>     <br><br> 

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" maxlength="50" required>     <br><br> 

        <button class="btn btn-success">Cadastrar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>       
    </form>

</body>
</html>