#Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un 
algoritmo que le permita registrar el tiempo empleado en cada recorrido, al final del proceso el 
algoritmo debería mostrar el promedio de los tiempos empleados. También necesita saber cuántas 
veces su tiempo fue menor a valor dado y cuál fue su mejor tiempo realizado.

<?php
$acumuladorTiempo = 0;
$contador = 0;
$valorDado = readline('Ingrese el valor a verificar: ');
$contadorMenorADado = 0;

do{
  $tiempo = readline("Ingrese la cantidad de minutos que empleo: ").PHP_EOL;
  if($tiempo < $valorDado){
    $contadorMenorADado++;
  }
  $mejorTiempo = $contador == 0 ? $tiempo : ($tiempo < $mejorTiempo ? $tiempo : $mejorTiempo); 
  $acumuladorTiempo += $tiempo;
  $contador ++;
  $opcion = strtolower(readline("Si : seguir registrando, No: fin."));
}while($opcion !== "no");
$promedio = $acumuladorTiempo/$contador;
echo "Promedio: " . $promedio .", mejor tiempo: ".$mejorTiempo .", cantidad de veces menor al valor dado: ".$contadorMenorADado;