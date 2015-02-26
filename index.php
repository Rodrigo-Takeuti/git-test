<!DOCTYPE html>
<html>
<head>
    <title>Exercicio4</title>
    <meta charset="UTF-8">
    <?php
        $p1 = 8.5;
        $m1 = 6.8;
        $m2 = 7.3;
        $proj1 = 7.0;
        $proj2 = 5.9;
        $proj3 = 9.2;
        $proj4 = 3.7;
        $trabF = 8.5; 
        $proComp = 8.7;
        $pf = 7.7;
        $mediaIntermediaria;
        $mediaFinal;
    
    $mediaIntermediaria = ($p1 * 30 + $m1 * 10 + $m2 * 5 + $proj1 * 5+ $proj2 * 5+ $proj3 * 5 + $proj4 * 10 + $trabF * 10 + $proComp * 20) / 100;
    
    if($mediaIntermediaria >= 7.5)
    {
        $mediaFinal = $mediaIntermediaria;
        echo'Aprovado sem Prova Final';
        echo'Parabéns!!! Boas férias';
    }else{
        $mediaFinal = ($mediaIntermediaria + $pf) / 2;
        
    }
    
    if($mediaFinal >= 5.0)
    {
        echo'Aprovado com Prova Final';
        echo'Agora já pode descansar tranquilo';
    }  else {
        echo'Reprovado';
        echo'Não foi dessa vez. Ano que vem tem mais TWII';
        echo"Média Intermédiaria: $mediaIntermediaria";
        echo"Média FInal: $mediaFinal"; 
    }
    ?>
</head>
<body>
    
</body>
</html>
