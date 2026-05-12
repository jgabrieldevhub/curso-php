<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login User</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
<br>
        <form action="cadastrar.php" method="post">
            <label for="nome_produto" >Nome:</label>
            <input type="text" name="nome" placeholder="nome do usuário">
<br>
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" placeholder="(00) 123456-7890">
<br>
            <label for="email">E-mail:</label>
            <input type="email" name="email" placeholder="exemplo@email.com">
<br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="recomendaçoes (!@#$%&*)">
<br>

<br>

            <button type="submit">Cadastrar-se</button>
            <button type="reset">Limpar Campos</button>
        </form>
    </div>
</body>
</html>