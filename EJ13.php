#Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los 
positivos y la media de los negativos
<?php
$contadorPositivos = 0;
$contadorNegativos = 0;
$acumuladorPositivos = 0;
$acumuladorNegativos = 0;
do{
  $num = (int)readline('Ingrese un número: ');
  if($num>0){
    $contadorPositivos++;
    $acumuladorPositivos += $num;
  }else if($num < 0){
    $contadorNegativos++;
    $acumuladorNegativos += $num;
  }

}while($num !== 0);

$mediaPositivos = $acumuladorPositivos/$contadorPositivos;
$mediaNegativos = $acumuladorNegativos/$contadorNegativos;

echo 'La media de positivos es: '.$mediaPositivos .", La media de negativos es: ".$mediaNegativos;