<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do produto</title>
</head>
<body>
<h1>Status do produto com if</h1>
    <!--
        25 – Implemente um programa que receba o código do status da compra e
        imprima o nome status conforme a tabela abaixo.
        Código Status
        1 Aguardando pagamento
        2 Pago
        3 Em transporte
        4 Entregue
    -->
    <?php
         $situacao=5;
         if ($situacao==1){
             $status='Aguardando pagamento';
         }elseif($situacao==2){
             $status='Pago';
         }elseif($situacao==3){
             $status='Em Transporte';
         }elseif($situacao==4){
            $status='Entregue';
         }else{
             $status='Não identificado...';
         }
         echo 'Status: '.$status;
    ?>
    <h1>Status do produto com switch</h1>
    <?php     
         $situacao=3;
         switch ($situacao){
            case 1:
                $status='Aguardando pagamento';
            break;
            case 2:
                $status='Pago';
            break;
            case 3:
                $status='Em transporte';
            break;
            case 4:
                $status='Entregue';
            break;
            default:
                $status='Não identificado'; 
            break;
         }
         echo 'Status: '.$status;

    ?>
    
</body>
</html>