<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
    <meta charset="UTF-8">
    <?php
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
