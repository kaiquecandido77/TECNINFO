<?php
$numero=4;
    switch($numero){
        case 1:
            $mensagem="uma bicicleta";
            echo "uma bicicleta";
        break;
        case 2:
            $mensagem="mil reais em barras de ouro";
            echo "mil reais em barras de ouro";
        break;    
        case 3:
            $mensagem="uma casa";
            echo "uma casa";
        break;
        case 4:
            $mensagem="um conjunto de panelas";
            echo "um  conjunto de panelas";
        break;
        case 5:
            $mensagem="um carro zero";
            echo"um carro zero";
        break;
        default: 
        $mensagem="nada infelizmente";
    }
    echo "parabens seu premio foi: $mensagem";
?>