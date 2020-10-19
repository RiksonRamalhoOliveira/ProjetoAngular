<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis em PHP</title>	 
	 
</head>
<body>
<?php
   $nome="Rikson";
   $idade=50;
   echo '<h1> Meu nome é '.$nome.' e tenho '.$idade.' anos </h1>';
   echo "Meu nome é <h1>$nome</h1> e tenho $idade anos";
   
   $n1=20;
   $n2=30;
   $n3=$n1+$n2;
    
   echo"<br />";
   echo '<h1>a soma entre '.$n1.' + '.$n2.' é '.$n3.'</h1>';
   
   $verdade=true;
   $falso=false;
   
   $contador='1'; // conversao variaveis
   $contador++;
   echo 'contador auto-incremento '.$contador;
   $letra='A';
   //$letra=$letra+'a';
   $n3='100';
   $contador=$contador+$n3;
   echo "</p> {$letra}<h1>bla <h1>";
   
   
?>
</body>
<html>