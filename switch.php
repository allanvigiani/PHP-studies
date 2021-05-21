<?php

    # Switch serve como alternativas ao if/else 
    $nome = 'Carlos';
    switch ($nome) {
        case 'Allan':
            echo 'Olá, Allan';
            break;
        
        case 'João':
        case 'Fernando':
            echo 'Olá, João ou Fernanda';
            break;
            
        default:
            echo 'Olá, estranho';
            break;
    } 

    # Novo modo de escrever condições switch
    # echo match
    $numero = 15;
    echo match($numero) {
        1 => 'número 1',
        5 => 'número 5',
        10, 11, 12 => 'é 10, 11 ou 12',
        default => 'outro número',
    };

?>

<?php # Alternativa para switch case ?>

<?php if(true): ?>

    <div>Código HTML</div>

<?php elseif(false): ?>

    <div>Outro código HTML</div>

<?php endif; ?>

