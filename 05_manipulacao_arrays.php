<?php
    $infoEmpresa = [
        'nome' => 'Senac Americana',
        'funcionario' => 'Paulo Santos',
        'anoAtual' => 2026,
    ];

    $infoCurso = [
        'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
        'totalCursos' => 26,
    ];

    echo "<pre>";
    
    /*
        array_keys = "Mostra as chaves do array";
        array_values = "Mostrar os valores da array";
        array_merge = "Mescla as arrays";
        count = "Mostrar quantidade de valores do array";
        var_dump = "Mostra a estrutura do array";
        
    */

    /*
        var_dump(array_keys($infoEmpresa));
        var_dump(array_values($infoEmpresa));
        var_dump(count($infoEmpresa));    
        var_dump(array_merge($infoEmpresa, $infoCurso));   
        var_dump(array_merge($infoEmpresa, $infoCurso));
    */

    print_r($infoEmpresa) 

?>