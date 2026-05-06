<?php 
    $estado = 'São Paulo';
    $arrayEstado = explode('/', $estado);
    echo "<pre>";
    print_r($arrayEstado);

    $info = 'São Paulo/SP/Brasil/Terra';
    $arrayinfo = explode('/', $info);
    print_r($arrayinfo);
?>