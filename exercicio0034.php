<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        34 – A empresa “B” de cinema realizou uma pesquisa sobre o filme, contendo a
    pergunta “De 5 a 10 qual nota daria no filme?“ O resultado obtido é
    “9,8,5,7,8,9,10,9,10,8,7,10,9”. Implemente o programa que receba as notas em
    um array. Utilizando o Foreach realize o cálculo da média atribuída ao filme
    pelos expectadores. No final do programa imprima a média
    -->
    <?php
        $notas = [9,8,5,7,8,9,10,9,10,8,7,10,9];
        foreach($notas as $nota){
            echo 'nota - '.$nota.'<br>';
        }
    ?>
        
    </body>
    </html>