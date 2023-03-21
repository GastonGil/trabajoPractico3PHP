#Escribir un programa que lea números enteros de teclado hasta que encuentre uno que cumpla las 
siguientes condiciones:  
• Múltiplo de 2.  
• No múltiplo de 5.  
• Mayor que 100.  
• Menor que 10.000. 
<?php
do{
  $num = (int)readline("Ingrese un número: ").PHP_EOL;
  $cumple = ($num % 2 == 0 && $num % 5 !== 0 && $num > 100 && $num < 10000) ? true : false;
}while(!$cumple);