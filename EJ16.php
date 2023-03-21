#En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las 
tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para 
informar en que año la población del país B supera a la de A.

<?php

$a = 25;
$b = 19;
$anio = 1994;

while($a > $b){
  $a += 2*$a/100;
  $b += 3*$b/100;
  echo $a.PHP_EOL;
  echo $b.PHP_EOL;
  $anio++;
}

echo "El año es : ".$anio;