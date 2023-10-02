<?php
//generar un areglo de numeros del 1 al 20
$numeros = range(1, 20);

//numero pares e impares
$pares = array();
$imares = array();

foreach ($numeros as $numero){
    if($numero % 2 == 0){

    } else{
        $impares[] = $numero;
    }
}

echo "Numeros Pares: ";
print_r($pares);
?>
