<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Aceita</h1>
<h3>
21 – Implemente um programa que receba o sexo e a idade da pessoa. Se a
pessoa for do sexo feminino e tiver igual ou mais de 18 anos e menos que 25
anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e
a mensagem: NÃO ACEITA.
</h3>
    <?php
        $idade=18;
        $sexo='F';
        if (($idade>=18 or $idade<25) and ($sexo=='F')){
            echo 'Aceita';
        }else{
            echo 'errado';
        }
    ?>
</body>
</html>