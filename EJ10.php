#Imprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula 
como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13...
<?php
$a = 0;
$b = 1;
for ($i=0; $i < 100 ; $i++) { 
  if($i == 0 || $i == 1){
    echo $i.PHP_EOL;
  }else{
    $resultado = $b + $a;
    echo $resultado.PHP_EOL;
    $a = $b;
    $b = $resultado;
  }
}