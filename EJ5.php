#Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente 
hasta 2.
<?php

$num;
do{
  $num = (int)readline("Ingrese un número par mayor a 2: ").PHP_EOL;
}while($num % 2 != 0 || $num <= 2);

for($i = $num; $i >= 2; $i--){
  if($i%2==0){
    echo $i.PHP_EOL;
  } 
}