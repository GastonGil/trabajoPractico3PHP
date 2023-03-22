#Un galpón tiene al comienzo de la jornada una cantidad inicial (Stock inicial) de cajones  
con productos de un solo tipo, luego repetidamente, entran y salen camiones, que traen o 
llevan cantidades de cajones. Si no alcanza la cantidad a llevar, se debe mostrar un mensaje 
“NO ALCANZA”, se lleva todo lo que hay; se muestra lo que se lleva y el galpón queda vacío. 
Se muestra al final de la jornada cuantos cajones hay en el galpón (Stock final), y cuantos  
cajones ingresaron y cuantos cajones salieron en toda la jornada. 

<?php

function menu(){
  do{
    echo "1: Ingresan".PHP_EOL;
    echo "2: Salen".PHP_EOL;
    $opcion = readline();
  }while (strcmp($opcion, "1")!==0 && strcmp($opcion, "2")!==0);
  return $opcion;  
}

function respuesta(){
  do{  
    echo "1: Seguir".PHP_EOL;
    echo "2: Fin".PHP_EOL;
    $respuesta = readline();
  }while (strcmp($respuesta, "1")!==0 && strcmp($respuesta, "2")!==0);
  return $respuesta;
}

function galpon(){
  $stock = readline("Ingrese el stock inicial: ").PHP_EOL;
  $cajonesIngresantes = 0;
  $cajonesSalientes = 0;
  do{
    $opcion = menu();
    if($opcion == 1){
      $cantIngresan = readline("Ingrese la cantidad de cajones ingresantes: ").PHP_EOL;
      $stock+=$cantIngresan;
      $cajonesIngresantes+=$cantIngresan;
    }else{
      $cantSalen = readline("Ingrese la cantidad de cajones salientes: ").PHP_EOL;
      if($cantSalen > $stock){
        echo "No alcanza; se lleva = $stock ".PHP_EOL;
        $cajonesSalientes += $stock;
        $stock = 0;
      }else{
        $stock-=$cantSalen;
        $cajonesSalientes+=$cantSalen;
      }
    }
    $respuesta = respuesta();
  } while(strcmp($respuesta, "1")==0);
  echo "Stock final : $stock, Ingresaron: $cajonesIngresantes, Salieron: $cajonesSalientes";
}

galpon();