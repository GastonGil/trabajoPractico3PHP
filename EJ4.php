#imprimir un listado con los números impares desde 1 hasta 999 y seguidamente otro listado con los 
números pares desde 2 hasta 1000 
<?php
echo "Números impares".PHP_EOL;
for ( $i = 1; $i < 1000; $i++){
  if($i % 2 != 0){
    echo $i.PHP_EOL;
  }
}
echo "Números pares".PHP_EOL;
for ( $i = 2; $i < 1001; $i++){
  if($i % 2 == 0){
    echo $i.PHP_EOL;
  }
}