#Realizar la división entera a/b de dos valores enteros positivos mediante restas. 
<?php

$acumulador = 0;
do{
  $a = (int)readline("Ingrese el número a divir mayor a 0: ").PHP_EOL;
  $b = (int)readline("Ingrese el divisor mayor a 0: ").PHP_EOL;
  if($a > 0 && $b > 0) {
    do{
      $resto = $a - $b;
      $a = $resto;
      $acumulador ++;
    }while($resto > $b);
  } 
}while($a<=0 || $b<=0);


echo $acumulador;