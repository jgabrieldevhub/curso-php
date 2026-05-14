<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Evento Form</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="with:100vw; height: 100vh;">
    <div class=" d-flex flex-column p-5 shadow">
        <h1 class="mb-4">Cadastro de Evento</h1>
        <form action="cadastro.php" method="post" class="d-flex flex-column">

            <label class="form-label" for="nome" >Nome</label>
            <input class="form-control mb-3" type="text" name="nome" placeholder="nome do evento">
            <label class="form-label" for="tipo" >Tipo</label>
            <select class="form-select" name="tipo">
                <option value="notInformed">Selecione...</option>
                <option value="show">Show</option>
                <option value="formatura">Formatura</option>
            </select>
            <label class="form-label" for="data" >Data</label>
            <input class="form-control" type="date" name="data">
            <label class="form-label" for="descricao">descriçâo</label>
            <textarea class="form-control" name="descricao"></textarea>

        <div class="mt-3">
            <button class="btn btn-primary text-white" type="submit">Enviar</button>
            <button class="btn btn-success text-white" type="reset">Limpar</button>
        </div>    
        </form>
    </div>
</body>
</html>