#Escribir un programa que vaya pidiendo al usuario valores enteros hasta que introduzca un valor 
negativo, después debe indicar los 3 valores mayores. Por ejemplo, si el usuario introduce los 
números: 1, 34, 45, 3, 2, 10, 9, 8, 78, 55, 3, 78, 43 y -5, el programa deber a mostrar: 78, 55, 45. 
Nótese que en el ejemplo el valor 78 aparece dos veces, pero solo se considera una vez entre los tres 
mayores. Es decir, los valores máximos repetidos únicamente se tienen en cuenta una vez. El orden 
en el que aparezcan los 3 valores máximos es irrelevante. Aunque en el ejemplo salgan ordenados 
de mayor a menor, al revés o sin orden también es correcto. Si el usuario introduce menos de tres 
valores el programa sólo mostrará como mayores los que se han introducido. Por ejemplo, si el 
usuario introduce: 3, 78, -5, la solución será: 3, 78. 

<?php
function tresMayores(){
  $mayor1 = 0;
  $mayor2 = 0;
  $mayor3 = 0;
  
  for ($i=0; $i < 3; $i++) { 
    $numero = (int)readline("Ingrese un número: ");
    if($numero < 0){
      break;
    }else{
      if($i==0){
        $mayor1 = $numero;
      }elseif($i==1){
        $mayor2 = $numero;
      }else{
        $mayor3 = $numero;
      } 
    }
  }
  if($mayor3 > $mayor1 && $mayor3 >  $mayor2 && $mayor2 > $mayor1){
    $mayor1 = $mayor3;
    $mayor3 = $mayor1;
  }else if($mayor2 > $mayor1 && $mayor2 > $mayor3 && $mayor3 > $mayor1){
    $aux = $mayor3;
    $aux2 = $mayor2;
    $mayor3 = $mayor1;
    $mayor2 = $aux;
    $mayor1 = $aux2;
  }
  while($numero > 0){
    $numero = (int)readline("Ingrese un número: ");
    if($numero > $mayor1 ){
      $mayor3 = $mayor2;
      $mayor2 = $mayor1;
      $mayor1 = $numero;
    }else if($numero > $mayor2 && $numero < $mayor1){
      $mayor3 = $mayor2;
      $mayor2 = $numero;
    }else if($numero > $mayor3 && $numero < $mayor1 && $numero < $mayor2){
      $mayor3 = $numero;
    }
  }
  echo $mayor1 . " " . $mayor2 ." " . $mayor3;
}
tresMayores();


