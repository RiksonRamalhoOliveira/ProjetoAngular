<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <!--
        26 – Implemente o programa usando o SWITCH que receba o código
        correspondente ao cargo de um funcionário e o seu salário atual e imprima o
        cargo, o salário atual, o valor do aumento e seu novo salário. Os cargos estão
        na tabela a seguir:
        Código Cargo Percentual
        1 Escriturário 50%
        2 Secretário 35%
        3 Caixa 20%
        4 Gerente 10%
        5 Diretor 05%
    -->
    <?php
        $cargo=4;
        switch ($cargo){
            case 1:
                $aumento=50;
                $descCargo='Escriturário';
                $salario=1000;
            break;
            case 2:
                $aumento=35;
                $descCargo='Secretário';
                $salario=1200;
            break;
            case 3:
                $aumento=20;
                $descCargo='Caixa';
                $salario=1300;
            break;
            case 4:
                $aumento=10;
                $descCargo='Gerente';
                $salario=1400;
            break;
            case 5:
                $aumento=5;
                $descCargo='Diretor';
                $salario=2000;
            break;
            default :
                $aumento=0;
                $descCargo='Indefinido';
            break;
        }
        if ($aumento==0){
            echo 'Cargo indefinido';
        }else{
            echo 'Cargo : '.$descCargo.'</br>';
            echo 'Salario : '.$salario.'</br>';
            echo 'Aumento : '.$aumento.' %</br>';
            $salarioAtual=$salario+(($salario*$aumento)/100);
            echo 'Salario atual : '.$salarioAtual;
            

        }


    ?>
    
</body>
</html>