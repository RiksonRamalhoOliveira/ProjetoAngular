<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa Estudo</title>
</head>
<body>
    <h1>Média de aluno para receber bolsa</h1>
    <h4>18 – Em uma determinada escola, um aluno é recomendado para obter bolsa
de estudo somente se possuir média acima de 8,5 e ter frequência maior que
70%. Implemente um programa que receba as informações do aluno e imprima
se o mesmo pode ou não receber bolsa</h4>

<?php
    $nota01 = 8;
    $nota02 = 9;
    $nota03 = 9;
    $media = (($nota01 + $nota02 + $nota03) / 3);
    $media = number_format($media, 2, '.', '');
    $frequencia=70;


    if (($media>=8.5) and ($frequencia>70)){
        echo 'aluno tem média de '.$media.' e frequencia de '.$frequencia.'</br>';
        echo 'bolsa aprovada';
    }else{
        echo 'aluno tem média de '.$media.' e frequencia de '.$frequencia.'</br>';
        echo 'Bolsa negada';

    }
?>
    
</body>
</html>