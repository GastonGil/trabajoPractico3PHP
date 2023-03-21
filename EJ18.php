#Un censista recopila ciertos datos aplicando encuestas para el último Censo Nacional de Población y 
Vivienda. Desea procesar los datos de todas las personas que alcance a encuestar en un día y 
obtener los porcentajes de estudios de niveles primario, secundario, superior no universitario, 
universitario y de postgrado.

<?php
$acumuladorPrimario = 0;
$acumuladorSecuandario = 0;
$acumuladorSupNoUniv = 0;
$acumuladorUniv = 0;
$acumuladorPostGrado = 0;

do{
  $opcion = readline("Ingrese 1: Primario, 2: Secundario, 3: Sup. No Univ., 4: Universitario y 5: Post Grado ").PHP_EOL;
  switch ($opcion) {
    case '1':
      $acumuladorPrimario++;
      break;
    case '2':
      $acumuladorSecuandario++;
      break;
    case '3':
      $acumuladorSupNoUniv++;
      break;
    case '4':
      $acumuladorUniv++;
      break;
    case '5':
      $acumuladorPostGrado++;
      break;

    default:
      echo "La opción ingresada es incorrecta.";
      break;
  }
  do{
    $sigue = strtolower(readline('Si: seguir, No: fin ')).PHP_EOL;
    echo strcmp($sigue, 'si');
  }while(!strcmp($sigue, "si") == 0 && !strcmp($sigue, "no") == 0);
}while(strcmp($sigue, 'si')==0);

$total = $acumuladorPrimario + $acumuladorSecuandario + $acumuladorSupNoUniv + $acumuladorUniv + $acumuladorPostGrado;
$porcentajePrimario = $acumuladorPrimario * 100 / $total;
$porcentajeSecuandario = $acumuladorSecuandario * 100 / $total;
$porcentajeSupNoUniv = $acumuladorSupNoUniv * 100 / $total;
$porcentajeUniv = $acumuladorUniv * 100 / $total; 
$porcentajePostGrado = $acumuladorPostGrado * 100 / $total;

echo "Primario = ".$porcentajePrimario .PHP_EOL."Secuandario = ".$porcentajeSecuandario .PHP_EOL."Superior no universitario = ".$porcentajeSupNoUniv .PHP_EOL."Universitario = ".$porcentajeUniv .PHP_EOL."PostGrado = ".$porcentajePostGrado .PHP_EOL;