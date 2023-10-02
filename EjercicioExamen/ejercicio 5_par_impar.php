<?php
$num=$_GET['num'];
if($num >= 0){
    if($num% 2 == 0){
        echo "El numero es par";
    } else {
        echo "El numero es impar";
    }
} else {
    echo "Ingresar un numero positivo";
}
?>