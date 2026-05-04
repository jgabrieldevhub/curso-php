<?php
    /*
        Operadores Aritméticos
    + soma
    - subtrai
    / divide
    * multiplica
    % resto

    Operadores Relacionais
    > maior
    < menor
    >= maior igual
    <= menor igual
    == igual
    != diferente

    Operadores lógicos
    && e
    || ou
    !  não
    */

    $numero = 22;
    $numeroDois = 22;

    if ($numero == $numeroDois) {
        echo 'São iguais';
    }else{
        echo 'Não são iguais';
    }

    echo'<br>';
    echo'<br>';
    echo'<hr>';
    echo'<br>';

    if ($numero < 20) {
        echo 'E menor!';
    } else {
        echo 'E maior!';
    }
?>