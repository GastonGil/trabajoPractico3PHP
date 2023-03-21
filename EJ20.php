#Suponga que tiene usted una tienda y desea registrar las ventas en su computadora. Diseñe un 
algoritmo que lea por cada cliente, el monto total de su compra. Al final del día que escriba la 
cantidad total de ventas y el número de clientes atendidos.
<?php

$opcion = true;
$contador = 0;
$totalVentas = 0;
while($opcion){
  $totalVentas += readline("Ingrese el precio de la venta: ").PHP_EOL;
  $contador ++;
  do{
    $sigue = readline("1-Seguir, 2-Fin").PHP_EOL;
  }while($sigue !== 1 && $sigue !== 2);
  $opcion = $sigue == 1 ? true : false;
}
echo "Total de ventas: " . $totalVentas .", clientes atendidos: " .$contador;