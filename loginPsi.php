<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize seu Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <div class="page">
        <div class="coluna">
            <form action="loginPsiBD.php" method="POST" class="form">
                <h1>Login</h1>
                <p>Digite os seus dados de acesso no campo abaixo.</p>

                <label>E-mail</label>
                <input name="email" type="email" placeholder="Digite seu e-mail" autofocus="true" require />

                <label>Senha</label>
                <input name="password" type="password" placeholder="Digite sua senha" require />

                <a href="recuperarSenha.php">Esqueci minha senha</a>
                <a href="cadastroPsicologo.php">Não possuo cadastro</a>
                <input type="submit" value="Acessar" class="btn" />

            </form>
        </div>
        

    </div>

</body>

</html>