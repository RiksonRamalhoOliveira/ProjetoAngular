<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <h1>Função</h1>
    <form method='GET'>
        <label>Nome:</label>
        <input type="text" name="nome_cliente" placeholder="digite o nome" require><br><br>
    </form>
    <?php
        $curso='Desenvolvimento web';
        $codigo=1;
        echo verificaCurso($codigo);

        function verificaCurso($codigo){
            if ($codigo==1){
                $msn='curso valido';
            }else{
                $msn='Curso invalido';

            }
            return $msn;

        }
        

    ?>   
</body>
</html>