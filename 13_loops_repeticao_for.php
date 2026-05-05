<?php
    $nomes = ['João', 'Rita', 'Claudio', 'Fernanda'];

    for ($i = 0; $i<count($nomes); $i++) {
        echo $nomes[$i];
        echo '<br>';
    }

    echo '<br>';

    for ($i = 10; $i>0; $i--){
        echo "{$i}, ";
    }

    echo '<br>';
    echo '<hrr>';
    echo '<br>';

    for ($i = 1; $i<11; $i++){
        echo "{$i}, ";
    }
?>