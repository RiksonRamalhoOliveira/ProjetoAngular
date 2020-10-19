<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisa de mercado</title>
</head>
<body>
    <h1>Pesquisa de mercado - foreach</h1>
     <!-- 
         35 – Uma Empresa fez uma pesquisa de mercado para saber se as pessoas
        gostaram ou não de um novo produto lançado no mercado. Obtendo o seguinte
        resultado “S-S-S-N-S-N-N-S-S-S-S-N-S-S-N-S-S-S” (S - Sim ou N - Não).
        Implemente um programa que calcule e mostre:
        - o número de pessoas que respondeu sim;
        - o número de pessoas que respondeu não;
     -->
     <?php
        $sim=0;
        $nao=0;
        $semOpiniao=0;
        $pesquisa = ['S','S','S','N','S','N','N','S','S','S','S','N','S','S','N','S','S','S','0'];
        foreach($pesquisa as $valor){
            if ($valor=='S'){
                $sim=$sim+1;
            }elseif($valor=='N'){
                $nao=$nao+1;
            }else{
                $semOpiniao=$semOpiniao+1;
            }
        }
        echo '<h3>Resultado da pesquisa<h3> <br>';
        echo 'Número de pessoas que respondeu Sim : '.$sim.'<br>';
        echo 'Número de pessoas que respondeu Não : '.$nao.'<br>';
        echo 'Número de pessoas que Não Opinaram  : '.$semOpiniao.'<br>';
     ?>
</body>
</html>