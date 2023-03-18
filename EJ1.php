<?php
#1. Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?

#Con do, el mas adecuado
$contador = 0;
$acumulador = 0;

do{
  $nota = readline('Ingrese la nota: ');
  if ($nota > 0){
    $acumulador += $nota;
    $contador ++;
  }
}while($nota < 0);
$promedio = $acumulador/$contador;
echo'El promedio de notas es : '.$promedio; 

#Con while
$contador = 0;
$acumulador = 0;

$nota = readline('Ingrese la nota: ');
  if ($nota > 0){
    $acumulador += $nota;
    $contador ++;
  }
while($nota>0){
  $nota = readline('Ingrese la nota: ');
  if ($nota > 0){
    $acumulador += $nota;
    $contador ++;
  }
}
$promedio =($contador>0)? $acumulador/$contador : 0;
echo'El promedio de notas es : '.$promedio; 

#Con for
$contador = 0;
$acumulador = 0;

/*for ($contador=0, $acumulador= 0; $nota > 0 ; $acumulador+=$nota, $contador++) { 
  if ($nota < 0)? break : $nota = readline('Ingrese la nota: ');
}
$promedio =($contador>0)? $acumulador/$contador : 0;
echo'El promedio de notas es : '.$promedio; */