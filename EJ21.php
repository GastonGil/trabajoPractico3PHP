#Se ofrece un trabajo que pague un centavo en la primera semana y dobla su salario cada sema- 
na, es decir, $0.01 la primera semana; $0.02 la segunda semana; $0.04 la tercera semana; 
$(2 n-1 )/100 la n-ésima semana. Determine el salario por cada semana y el salario pagado hasta 
la fecha por espacio de n semanas.

<?php
function calculadorSalario($cantSemanas){
  $salario = 0.01;
  $acumuladorSalario = 0;
  for ($i=0; $i < $cantSemanas; $i++) { 
    if($i !== 0){
      $salario *= 2;
    }
    $acumuladorSalario += $salario;
    echo "Semana: ($i+1), Salario: $salario".PHP_EOL;
  }
  echo "El salario hasta la fecha es de: $acumuladorSalario";
}

calculadorSalario(readline("Ingrese la cantidad de semanas: "));