<?php

    # Array = Matriz = Coleção de valores
    
    $numeros = array(1, 3, 5, 7, 9);
    $nomes = ['numeros', 'impares'];

    echo $numeros[0];
    echo $nomes[1];

    # Forma key => value
    $dados = [
        'a' => 1000,
        'b' => 2000,
        'c' => 3000
    ];
    
    # Adicionar elemento no final
    $dados[] = 4000;

    $nomes[0] == 'novo nome'; # Adiciona no índice 0

    array_push($numeros, 11);

    # ARRAYS MISTOS

    $dados2 = [
        'nome' => 'Allan',
        'sobrenome' => 'Vigiani',
        'idade' => 21,
        20 => 2000
    ];

    echo $dados2['idade'];

    # ARRAY DENTRO DE ARRAY

    $numeros2 = [
        [1, 2, 3],
        [10, 20, 30],
        [100, 200, 300]
    ];

    echo $numeros2[2][0];

    # ARRAY MULTIDIMENSIONAL ASSOCIATIVO

    $cidades = [
        'Brasil' => ['RJ', 'MG', 'SP'],
        'EUA' => ['NY', 'CA', 'MS']
    ];

    echo $cidades['Brasil'][2]; # 'SP'
    echo $cidades['EUA'][0]; # 'NY'
    
?>