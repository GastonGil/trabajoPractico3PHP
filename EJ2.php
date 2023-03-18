
#2. Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres algoritmos con cada estructura repetitiva.

6*4 = 6+6+6+6 = 4+4+4+4+4+4 = 24
a + b = a+a+a+a... = b+b+b+b.... 

<?php

$A = readline('Ingrese el valor de A: ');
$B = readline('Ingrese el valor de B: ');


if($A < 0){#Si A es negativo le doy su valor absoluto
  $A = abs($A);
  $B = abs($B);
}
#Intercambio de variables, porque me conviene con el menor valor en A
if($A > $B){
  $auxiliar  = $A;
  $A = $B;
  $B = $auxiliar;
}

#Con for
$acumulador = 0;

for($i=0; $i < $A; $i++){
  $acumulador += $B;
}
echo "$A x $B = $acumulador";

#con while
$acumulador = 0;
$i=0;
while($i < $A){
  $acumulador += $B;
  $i++;
}

echo "$A x $B = $acumulador";

#con do while
$acumulador = 0;
$i=0;
do {
  $acumulador += $B;
  $i++;
} while ($i < $A);
echo "$A x $B = $acumulador";