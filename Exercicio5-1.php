<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 5.1</title>
    <meta charset="UTF-8">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td><b>Turma</b></td>
                <td><b>Disciplina</b></td>
                <td><b>Semana</b></td>
                <td><b>Professor</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $valor [0][0] = '02K01';
                $valor [1][0] = '02J01';
                $valor [2][0] = '02k01';
                $valor [0][1] = 'Tecnologia Web II';
                $valor [1][1] = 'Linguagem de Programação';
                $valor [2][1] = 'Linguagem de Programação';
                $valor [0][2] = 'Segunda';
                $valor [1][2] = 'Terça';
                $valor [2][2] = 'Quarta';
                $valor [0][3] = 'Charles';
                $valor [1][3] = 'João';
                $valor [2][3] = 'Charles';
                
                for($i = 0; $i < 3; $i++)
                {
                    echo "<tr>";
                    for($j = 0; $j < 4; $j++)
                    {
                        echo "<td>";
                        echo $valor[$i][$j];
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>
