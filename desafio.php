<?php
    function media($n1, $n2, $n3, $n4, $mambo = 4){
        return ($n1 + $n2 + $n3 + $n4) / $mambo;
    }

    echo round(media(3, 6, 7, 5));

    /*
        round() = 'serve para arredondar valores dentro das parenteses';
    */
?>