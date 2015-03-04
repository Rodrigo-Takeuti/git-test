<!DOCTYPE html>
<html>
<head>
    <title>Primo e Fibonacci</title>
    <meta charset="UTF-8">
    <?php
    //Primo
        $num = 77;
        $cont = 0;
        
        if($num % 2 == 0)
        {
            $cont++;
        }
        
        if($cont == 2)
        {
            echo 'O número é primo!!!';
        }else{
            echo 'O número não é primo!!!';
        }
        
    //Fibonacci
        
        $n = 10;
        $posterior = 0;
        $anterior = 1;
        $atual;
        
        for($i = 0; $i < n; $i++)
        {
            $atual = $posterior + $anterior;
            echo"$atual";
            $posterior = $anterior;
            $anterior = $atual;
            
        }
    ?>
</head>
<body>
    
</body>
</html>
