#Un autobús hace un recorrido por una ciudad desde un punto inicial donde suben N personas hasta 
un punto final donde descienden todas. El autobús realiza X paradas intermedias. Se sabe que en las 
paradas intermedias suben siempre 3 personas más que en la parada anterior y que desciende el 
50% de la gente del autobús (sin contar los que suben en dicha parada). ¿Cuántas personas llegarán 
hasta el final del trayecto? Pedir al usuario los valores de N y X. Por ejemplo, para N = 10 y X = 3:

<?php

function autobus($cantPuntoInicial, $cantParadasInterm){
  $cantPasajeros = $cantPuntoInicial;
  $ASCPARADAINTERM = 3;
  $DESCPARADAINTERM = 50*$cantPuntoInicial/100;
  $ascParadaActual = $cantPuntoInicial + $ASCPARADAINTERM;
  for ($i=0; $i < $cantParadasInterm; $i++) {
    if($i == 0){
      $cantPasajeros -= $DESCPARADAINTERM;
      $cantPasajeros += $ascParadaActual;
    }else{
      $ascParadaActual += $ASCPARADAINTERM;
      $cantPasajeros -= $DESCPARADAINTERM;
      $cantPasajeros += $ascParadaActual;
    } 
  }
  echo "La cantidad final de pasajeros es: $cantPasajeros";
}

autobus(10,3);