<?php

    # São utilizados para controle de fluxo do programa

    # if - else
    $nome = 'João';
    if ($nome == 'João') {
        echo 'Olá, João';
    } else {
        echo 'Olá, estranho';
    }; 

    # if - elseif - else
    $nota = 6;
    if ($nota <= 5) {
        echo 'Reprovado';
    }elseif ($nota >= 7) {
        echo 'Aprovado';
    }else{
        echo 'Recuperação';
    };

?>