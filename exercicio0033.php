<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha</title>
</head>
<body>
    <!--
        33 – A empresa “B” necessita emitir 25 carteirinha de acesso, cada carteirinha
        de possuir um número. A penúltima carteirinha teve o número 56897, a última
        56898, continue a sequência dos números e imprima na tela a numeração da
        próximas 25 carteirinha, usando FOR
    -->
    <?php
         $b=25+56898;
         $c=1;
        for($a=56899; $a<=$b;$a++){
            echo 'Carteirinha '.$c.' - '.$a.'<br>';
            $c++;

        }
    ?>    
</body>
</html>