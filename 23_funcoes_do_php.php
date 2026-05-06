<?php
    $nome = 'Carlos Ferreira';

    if(isset($nome)){
        echo $nome;
    }else{
        echo 'Não Existe';
    }

    /* isset = 'Valida a existencia de uma variavel'; */

    echo '<hr>';    

    unset($nome);
    if(isset($nome)){
        echo $nome;
    }else{
        echo 'Não Existe';
    }

    /* unset = 'Exculambacha a existencia da variavel'; */
?>