<!DOCTYPE html>
<html>
<head>
    <title>Primo e Fibonacci</title>
    <meta charset="UTF-8">
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>DESC</td>
            
        </tr>
        
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr style="background-color:gray">
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr style="background-color:gray">
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr style="background-color:gray">
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
        
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>desc</td>
            
        </tr>
    </table>
    
    </br>
    
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
            echo 'O número é primo!!! <br/>';
        }else{
            echo 'O número não é primo!!! <br/>';
        }
        echo '</br></br>';
    //Fibonacci
        
        $n = 10;
        $posterior = 0;
        $anterior = 1;
        $atual;
        
        echo 'Sequência de Fibonacci dos 10 primeiros termos: ';
        for($i = 0; $i < $n; $i++)
        {
            $atual = $posterior + $anterior;
            echo"$atual ";
            $posterior = $anterior;
            $anterior = $atual;
            
        }
        echo '</br></br>';
    ?>
</body>
</html>
