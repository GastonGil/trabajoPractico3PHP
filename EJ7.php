#Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones. 
<?php

do{
  $a = (int)readline ("Ingrese el número base mayor a 0: ").PHP_EOL;
  $b = (int)readline("Ingrese la potencia mayor a 0: ").PHP_EOL;
}while($a <= 0 || $b <= 0);

for ($i=$a; $i<$b ; $i++) { 
  $resultado += $a * $b;
}
echo $resultado;