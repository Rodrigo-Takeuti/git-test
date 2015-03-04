<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 5.2</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        function soma($x, $y)
        {
            return $x + $y;
        }
        
        function subtracao($x, $y)
        {
            return $x - $y;
        }
        
        function multiplicacao($x, $y)
        {
            return $x * $y;
        }
        
        function divisao($x, $y)
        {
            if($x > $y)
            {
                return $x / $y;
            }else{
                return $y / $x;
            }
        }
    ?>
</body>
</html>
