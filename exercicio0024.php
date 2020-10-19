<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media ponderada</title>
</head>
<body>
    <h1>Média Ponderada</h1>
    <!--
        24 – Implemente o programa que receba a nota e imprima o conceito que a
        nota vale conforme a tabela abaixo:
        MÉDIA PONDERDA CONCEITO
            8,0 à 10,0 A
            7,0 à 7,9  B
            6,0 à 6,9  C
            5,0 à 5,9  D
            0,0 à 4,9  E

    -->
    <?php
        $media = 5.9;
        if (($media==0) or ($media<=4.9)){
            $conceito = 'E';
        }elseif(($media >= 5) or ($media <= 5.9)){
            $conceito = 'D';
        }elseif (($media >= 6) or ($media <= 6.9)){
            $conceito = 'C';
        }elseif (($media >= 7) or ($media <= 7.9)){
            $conceito = 'B';
        }elseif($media>=8){
            $conceito = 'A';
        }
        echo $conceito;

    ?>
   
    
</body>
</html>