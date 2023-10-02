<?php
if(isset($_POST['nombre']) && isset($_POST['ciudad'])){
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    echo "Nombre <strong>$nombre</strong><br>";
    echo "Ciudad: <span style='color:red;'>$ciudad</span><br>";
} else {
    echo "Nose han introducido datos";
}
?>