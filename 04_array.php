<?php
    $carros = ['Uno', 'Gol', 'Fusion', 'Civic'];

    print "$carros[1]"."<br>"."$carros[2]";

    echo "<br>";

    $carroUm = [
    'modelo' => 'Uno',
    'marca' => 'Fiat',
    'cor' => 'Branco',
    ];

    echo "<br>";

    print "Modelo: ". $carroUm['modelo']. "<br>";

    print "Marca: ". $carroUm['marca']. "<br>";

    print "Cor: ". $carroUm['cor'];

    /*
    Lembrete: 
        print: ""."";
        echo: "","";
    */
?>