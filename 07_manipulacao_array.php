<?php
    $carrinho = [
        0 => 'Macarrão',
        1 => 'Feijão',
        2 => 'Arroz',
        3 => 'Batata',
    ];

    echo '<pre>';

    /*
    arsort = "Ordena em ordem decrecente";
    asort = "Ordena em ordem alfabetica";
    sort = "Ordena em ordem ascrescente";
    */

    /*
        arsort($carrinho);
    */

    sort($carrinho);
    var_dump($carrinho);
?>