#  Leer 20 números y encontrar el mayor y el menor valor leídos.
<?php
$menor = null;
$mayor = null;

for ($i=0; $i < 20; $i++) { 
  $num = (int)readline("Ingrese un número: ");
  $mayor = $i == 0 ? $num : ($num > $mayor ? $num : $mayor);
  $menor = $i == 0 ? $num : ($num < $menor ? $num : $menor);
}
echo "Menor = ".$menor ." Mayor = ".$mayor;