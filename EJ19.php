#Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en 
letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar 
octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso 
finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e 
incorrectos ingresados por el usuario. 

<?php

$correctos = 0;
$incorrectos = 0;
$opcion = true;
do{
  $mes = (int)readline("Ingrese el valor númerico de un mes del 1 al 12: ").PHP_EOL;
  if($mes < 1 || $mes > 12 ){
    $opcion = $mes == 0 ? false : true;
    $incorrectos ++;
  }else{
    for ($i=$mes; $i <= 12 ; $i++) { 
      switch ($i) {
        case '1':
          echo "Enero".PHP_EOL;
          break;
        case '2':
          echo "Febrero".PHP_EOL;
          break;
        case '3':
          echo "Marzo".PHP_EOL;
          break;
        case '4':
          echo "Abril".PHP_EOL;
          break;
        case '5':
          echo "Mayo".PHP_EOL;
          break;
        case '6':
          echo "oaa Junio".PHP_EOL;
          break;
        case '7':
          echo "Julio".PHP_EOL;
          break;
        case '8':
          echo "Agosto".PHP_EOL;
          break;
        case '9':
          echo "Septiembre".PHP_EOL;
          break;
        case '10':
          echo "Octubre".PHP_EOL;
          break;
        case '11':
          echo "Noviembre".PHP_EOL;
          break;
        case '12':
          echo "Diciembre".PHP_EOL;
          break;
      }
    }
    $correctos ++;
  }  
}while($opcion);

echo "Correctos = ".$correctos ." Incorrectos = ".$incorrectos;