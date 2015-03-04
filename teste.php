<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 5.2</title>
    <meta charset="UTF-8">
    <?php include "operacoes.php" ?>
</head>
<body>
    <?php
        $n = 5;
        $m = 2;
        
        $somaNum = soma($n, $m);
        echo 'A soma de ';
        echo "$n ";
        echo ' e ';
        echo "$m ";
        echo ' é igual a: ';
        echo "$somaNum";
        
        echo"</br>";
        
        $subtraiNum = subtracao($n, $m);
        echo 'A subtração de ';
        echo "$n ";
        echo ' e ';
        echo "$m ";
        echo ' é igual a: ';
        echo "$subtraiNum";
        
        echo"</br>";
        
        $multiplicaNum = multiplicacao($n, $m);
        echo 'A multiplicação de ';
        echo "$n ";
        echo ' e ';
        echo "$m ";
        echo ' é igual a: ';
        echo "$multiplicaNum";
        
        echo"</br>";
        
        $divisaoNum = divisao($n, $m);
        echo 'A divisão de ';
        echo "$n ";
        echo ' e ';
        echo "$m ";
        echo ' é igual a: ';
        echo "$divisaoNum";
    ?>
</body>
</html>
