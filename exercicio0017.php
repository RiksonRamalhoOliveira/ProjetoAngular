<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atleta - campeonado</title>
</head>
<body>
    <h1>Categoria Atleta</h1>
    <?php
        $peso=65;
        $altura=1.70;
        if ((($peso>=50) or ($peso<60)) and ($altura<1.70)){
            echo 'Categoria Novato';
        }elseif ((($peso>=60) or ($peso<=80)) and ($altura>=1.7 or $altura<1.9)){
            echo 'Profissional';
        }
        

    ?>
    
</body>
</html>