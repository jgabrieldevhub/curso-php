<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $arquivo = fopen("usuarios.txt","a");
    fwrite($arquivo, "$nome \t $telefone \t $email \t $email \t $senha \n");
    fclose($arquivo);
?>