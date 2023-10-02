<?php
$n=$_GET['n'];

if(isset($_GET['n'])<=7){
    $numero=$_GET['n'];
    switch($numero){
        case 1:
            echo "Lunes";
        break;
        case 2:
            echo"Martes";
        break;
        case 3:
            echo"Miercoles";
         break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo"Sabado";
            break;
        case 7:
            echo"Domingo";
            break;

    }
}else{
    echo"no hay dias";
}