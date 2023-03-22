#Calcular la nota promedio de un salón de clase y la nota mayor y el código del estudiante 
que la obtuvo, validar que las notas ingresadas se encuentren en el intervalo [0,10]. El 
ingreso de notas finaliza a pedido del operador.

<?php

function clase(){
  $notaPromedio = 0;
  $notaMayor = 0;
  $codigoEstudiante = null;
  do{
    do{
      $nota = (int)readline("Ingrese la nota, del 0 al 10: ").PHP_EOL;
    }while($nota > 10 || $nota < 0);
    $codigoEstudiante = (int)readline("Ingrese el código del estudiante: ").PHP_EOL;
    $notaMayor = $nota > $notaMayor ? $nota : $notaMayor;
    do{
      $respuesta = strtolower(readline('Desea seguir ingresando? Si/No.'));
    }while(strcmp($respuesta,'si') !== 0 && strcmp($respuesta,'no') !== 0);
    PHP_EOL;
  }while(strcmp($respuesta,'si') == 0);
  echo "La nota mas alta es : $notaMayor , del alumno código: $codigoEstudiante";
}
clase();