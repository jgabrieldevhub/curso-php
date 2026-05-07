<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./01_exemplo_php/validar-cadastro.php" method="Post">
        <label for="email">E-mail: </label>
        <input type="email" name="email"><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha"><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>