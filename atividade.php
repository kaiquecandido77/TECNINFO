<?php
    $nota1 = 3;
    $nota2 = 7;
    $nota3 = 6;
    $nota4 = 5;
    $resultado=($nota1 + $nota2 + $nota3 + $nota4)/4;
    if($resultado >=7 && $resultado !=10){
        echo "O aluno foi aprovado";
    }
    elseif ($resultado = 0){
        echo "estude mais, voce nao acertou nada";
    }
    elseif($resultado = 10){
        echo "parabens! Aprovado com nota maxima";
    }
    
    else {
        echo "o aluno foi reprovado";
    }
?>

