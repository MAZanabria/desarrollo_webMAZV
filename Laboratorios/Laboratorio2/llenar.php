<?php
if(isset($_POST['numero']) && isset($_POST['n'])){
    $numero = $_POST['numero'];
    $n=$_POST['n'];
    $arreglo = array();
    for($i=0; $i < $n; $i++){
        $arreglo[]=$numero;
    }

    echo "arreglo es $numero en $n posicion";
    echo "<p><a href='eliminar.php?n=$n'>Eliminar mayores</a></p>";
}else{
    echo "completar";
}