<?php
    $nomes = ['Rubens', 'Senac', 'Americana'];

    echo '<pre>';

    var_dump($nomes);

    $nomes[0] = strtoupper($nomes[0]);
    $nomes[1] = strtoupper($nomes[1]);
    $nomes[2] = strtoupper($nomes[2]);

    var_dump($nomes);
?>