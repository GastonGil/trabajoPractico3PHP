#Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial. 
<?php
$a = 1;
do{
  $n = (int)readline("Ingrese el número mayor a 0:  ").PHP_EOL;
  if($n > 0){
    for ($i=1; $i <= $n; $i++) { 
      for ($y=0; $y < $i; $y++) { 
        $factorial = $a*($y+1);
        $a = $factorial;
      }
      echo 'El factorial de: '.$i .' es = '.$factorial .PHP_EOL;
      $factorial = 0;
      $a = 1;
    }
  }
}while($n <= 0);

