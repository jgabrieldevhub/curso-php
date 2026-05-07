<?php
    $name = 'Senac Americana - Curso de TI';
    echo strtoupper($name);
    echo '<hr>';

    /*
        strtoupper = 'Deixa em maíusculo'
    */

    echo strtolower($name);
    echo '<hr>';

    echo ucfirst(strtolower($name));
    echo '<hr>';

    echo ucwords(strtolower($name));
    echo '<hr>';

    
?>