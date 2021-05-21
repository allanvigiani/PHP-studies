<?php

    # FOR
    # for(variável, condição, incremento) {};
    for($i = 10; $i >= 1; $i--) {
        echo $i . '<br>';
    };

    # Outro exemplo
    $nomes = ['Allan', 'Ana', 'Leticia'];
    
    for($i = 0; $i < sizeof($nomes); $i++){
        echo $nomes[$i] . '<br>';
        # sizeof()/count() - conta quando elementos o array tem
    };

    # FOREACH
    foreach($nomes as $nome){
        echo $nome . '<br>';
    };

    $capitais = [
        'ES' => 'Vitória',
        'MG' => 'Belo Horizonte',
        'RJ' => 'Rio de Janeiro', 
    ];

    foreach($capitais as $key => $value) { # key value pair
        echo "Estado: $key - Capital: $value <br>";
    };

?>