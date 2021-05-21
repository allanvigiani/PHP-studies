<?php

    //https://www.php.net/manual/pt_BR/language.types.string.php

    $frase = "Essa é um frase teste";

    # Número de caracteres
    $total = strlen($frase);

    # Retorna as letras a partir da posição x até a y
    $posicao = substr($frase, 1, 6);

    # Converte em maiúscula
    $maiuscula = strtoupper($frase);

    # Converte em minúscula
    $minuscula = strtolower($frase);

    # Substituição de caracter
    $troca = str_replace('s', 'h', $frase);

    # Posição de um caracter
    $posicao = strpos($frase, 'f');
    
    # Se contem
    $nome = "Allan Vigiani";
    $contem = str_contains($nome, 'Allan');
    
    # Se começa por
    $comeca = str_starts_with($nome, 'Cleber');

    # Se termina com
    $termina = str_ends_with($nome, 'Costa');

?>