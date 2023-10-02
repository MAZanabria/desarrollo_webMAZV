<?php
function PalabraMasLarga($cadena){
    $palabra = explode('', $cadena);
    $palabraMasLArga = '';

    foreach ( $palabras as $palabra){
        if (strlen($palabra) > strlen($palabraMasLarga)){
            $palabraMasLArga = $palabra;
        }
    }

    return $palabraMasLArga;
}
?>

