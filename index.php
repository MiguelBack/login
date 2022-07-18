<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Sistema de Vendas</title>
</head>

<body>

    <h1>Login</h1>

    <form action="acessa.php" method="POST">

        <label for="username"> Usuário </label>
        <input type="text" name="login" id="username" />

        <label for="password"> Senha </label>
        <input type="password" name="senha" id="password" />

        <input type="submit" value="Acessar" />

    </form>


    <style>

        input {
            display: block;
            margin-bottom: 20px;
        }

    </style>

</body>

</html>