<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>
<h1>Operadores Lógicos</h1>
    <?php

        $nome="Rikson";
        $idade=50;
        if ($nome=="Rikso" or $idade==20) {
            echo 'Exemplo de ou';
        }else{
            echo "Teste ou";
        }
    ?>
    </br>

    <?php
        if ($nome=="Rikson" and $idade=50){
            echo "Exemplo 2  são iguais";
        }else{
            echo "exemplo 2 são diferentes";
        }
    ?>
    
</body>
</html>