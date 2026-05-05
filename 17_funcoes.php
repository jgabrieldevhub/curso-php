<?php
    function escrever($texto){
        echo "{$texto} <br>";
    }

    escrever('Something');

    echo '<hr>';

    function soma($n1, $n2){
        return $n1 + $n2;
    }

    echo soma(60, 7);

    echo '<br>';
    echo '<hr>';
    

    function conta($n1, $n2, $taxa = 2){
        return ($n1 + $n2) * $taxa;
    }

    echo conta(5, 3);
?>