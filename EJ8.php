#Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas. 
<?php


do{
  $a = readline("Ingrese el número a divir mayor a 0: ").PHP_EOL;
  $b = readline("Ingrese el divisor mayor a 0: ").PHP_EOL;
  if($a > 0 && $b > 0) {
    do{
      $resto = $a - $b;
      $a = $resto;
    }while($resto > $b);
  } 
}while($a<=0 || $b<=0);


echo $resto;