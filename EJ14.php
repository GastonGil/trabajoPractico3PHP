#Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres 
versiones, con un bucle: para, mientras y repetir. Repetir el ejercicio considerando que el número de 
valores se le solicita al usuario. 

<?php
$acumuladorPares = 0;
$acumuladorImpares = 0;
$contadorPares = 0;
$contadorImpares = 0;
for ($i=0; $i < 10 ; $i++) { 
  $num = (int)readline('Ingrese un número: ');
  if($num % 2 == 0){
    $acumuladorPares += $num;
    $contadorPares++;
  }else{
    $acumuladorImpares = $num;
    $contadorImpares++;
  }  
}
$mediaPares = $acumuladorPares/$contadorPares;
$mediaImpares = $acumuladorImpares/$contadorImpares;
echo 'La media de positivos es: '.$mediaPositivos .", La media de negativos es: ".$mediaNegativos .PHP_EOL;


$acumuladorPares = 0;
$acumuladorImpares = 0;
$contadorPares = 0;
$contadorImpares = 0;
$contador = 0;
do{
  $num = (int)readline('Ingrese un número: ');
  if($num % 2 == 0){
    $acumuladorPares += $num;
    $contadorPares++;
  }else{
    $acumuladorImpares = $num;
    $contadorImpares++;
  }
  $contador++;
}while($contador < 10);  
$mediaPares = $acumuladorPares/$contadorPares;
$mediaImpares = $acumuladorImpares/$contadorImpares;
echo 'La media de positivos es: '.$mediaPositivos .", La media de negativos es: ".$mediaNegativos .PHP_EOL;


$acumuladorPares = 0;
$acumuladorImpares = 0;
$contadorPares = 0;
$contadorImpares = 0;
$contador = 0;
while($contador < 10){
  $num = (int)readline('Ingrese un número: ');
  if($num % 2 == 0){
    $acumuladorPares += $num;
    $contadorPares++;
  }else{
    $acumuladorImpares = $num;
    $contadorImpares++;
  }
  $contador++;
}
$mediaPares = $acumuladorPares/$contadorPares;
$mediaImpares = $acumuladorImpares/$contadorImpares;
echo 'La media de positivos es: '.$mediaPositivos .", La media de negativos es: ".$mediaNegativos .PHP_EOL;

