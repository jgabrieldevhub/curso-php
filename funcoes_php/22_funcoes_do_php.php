<?php
    $empresa = 'Senac Jaú';
    echo "$empresa <br>";
    echo '<hr>';

    $novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
    echo "$novaEmpresa <br>";
    echo '<hr>';

    echo substr($novaEmpresa, 0, 5) . "<br>";
    echo '<hr>';

    echo strlen($novaEmpresa);
    echo '<hr>';
?>