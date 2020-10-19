<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso x preço'</title>
</head>
<body>
    <h1>Peso x preço</h1>
    <h3></h3>
    <?php
        $peso = 20;

        if ($peso<=10){
            $preco = 3;
        }else{
            $preco = 2;
        }
        $total = ($peso*$preco);
        echo 'Cliente comprou '.$peso.' kg de amoras. o preço do kg sai a '.$preco.' R$.</br>';
        echo 'TOTAL :'.$total;

    ?>
</body>
</html>