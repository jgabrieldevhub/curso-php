<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Login User</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="with:100vw; height: 100vh;">
    <div class=" d-flex flex-column p-5 shadow">
        <h1 class="mb-4">Cadastro de Usuário</h1>
        <form action="cadastrar.php" method="post" class="d-flex flex-column">
            <label class="form-label" for="nome_produto" >Nome:</label>
            <input class="form-control mb-3" type="text" name="nome" placeholder="nome do usuário">
            <label class="form-label" for="telefone">Telefone:</label>
            <input class="form-control mb-3" type="tel" name="telefone" placeholder="(00) 123456-7890">
            <label class="form-label" for="email">E-mail:</label>
            <input class="form-control mb-3" type="email" name="email" placeholder="exemplo@email.com">
            <label class="form-label" for="senha">Senha:</label>
            <input class="form-control mb-3" type="password" name="senha" placeholder="recomendaçoes (!@#$%&*)">
        <div class="mt-2">
            <button class="btn btn-primary text-white" type="submit">Cadastrar-se</button>
            <button class="btn btn-success text-white" type="reset">Limpar Campos</button>
        </div>    
        </form>
    </div>
</body>
</html>