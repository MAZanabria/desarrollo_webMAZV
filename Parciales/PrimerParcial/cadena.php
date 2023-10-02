<?php
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];
    
    $palabras = explode(" ", $cadena1);
    $palab = explode(" ", $cadena2);

    for($i = 0; $i <= count($palabras)-1; $i++){
        for($j = 0; $j <=count($palab)-1; $i++){
            if($palabras[$i] == $palab[j]){
                echo " palabra".$palabras
            
            } 
        }
    }
    $n_cadena = implode(" ", $palabras);
    echo $n_cadena;
    echo "<br>";
    if($has_script){
        echo "Tiene la palabra ";
    }
?>