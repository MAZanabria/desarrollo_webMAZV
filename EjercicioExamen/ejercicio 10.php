<?php
    $cadena = $_GET['cadena'];
    
    $palabras = explode(" ", $cadena);
    $has_script = false;
    for($i = 0; $i <= count($palabras)-1; $i++){
        if($palabras[$i] == "SCRIPT"){
            $palabras[$i] = "";
            $has_script = true;
        }
    }

    $n_cadena = implode(" ", $palabras);
    echo $n_cadena;
    echo "<br>";
    if($has_script){
        echo "Tiene la palabra SCRIPT";
    }
?>