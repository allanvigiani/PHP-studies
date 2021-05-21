<?php

    # Função
    function executar_func(){
        return 'Executou uma função';
        
    };

    echo executar_func();

    echo "<hr>";
    
    function elevar_quadrado($n) {
        $elevado = $n ** 2;
        return $elevado;
    };

    echo elevar_quadrado(12);

    echo "<hr>";

    $nomes = ['Allan', 'Leticia', 'David'];
    
    foreach($nomes as $nome) {
        chama_nome($nome);
    };

    function chama_nome($nome) {
        echo "Olá, $nome <br>";
    };

    # Função anônima
    $a = function(){
        echo "Func anônima.";
    };

    $a();

?>