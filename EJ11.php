#Calcular el factorial de 10 números diferentes cuyos valores se leen. 
<?php
$acumulador = 0;
$a = 1;
do{
  $n = (int)readline('Ingrese el número mayor a 0: ');
  if($n > 0){
    for ($i=1; $i < $n; $i++) { 
      $factorial =  $a*($i+1);
      $a = $factorial; 
    }
    echo 'El factorial de: '.$n .' es = '.$factorial .PHP_EOL;
    $acumulador ++;
    $factorial = 0;
    $a = 1;
  }
}while($acumulador < 10);