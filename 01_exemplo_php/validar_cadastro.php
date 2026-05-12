<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "adm@senac.com.br" && $senha == "123456"){
        header("Location: tela_admistrativa.php");
    }else {
        header ("Location: formulario.php?mensagem=erro");
    }
?>