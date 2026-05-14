<?php
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $data = $_POST["data"];
    $descricao = $_POST["descricao"];

    $arquivo = fopen("evento.txt","a");
    fwrite($arquivo, "$nome \t $tipo \t $data \t $descricao \n");
    fclose($arquivo);
?>