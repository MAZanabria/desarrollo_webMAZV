<?php
    include("conection.php");
    $nro = $_POST['nro'];
    $id_tipo_habitacion = $_POST['id_tipo_habitacion'];
    $bano_privado = isset($_POST["bano_privado"])? 1: 0;
    $espacio = $_POST['espacio'];
    $precio = $_POST['precio'];
    $sql = "INSERT INTO habitacion(nro, id_tipo_habitacion, bano_privado, espacio, precio) VALUES($nro, $id_tipo_habitacion, $bano_privado, $espacio, $precio)";
    mysqli_query($con, $sql);
    header("Location: listar_habitacion.php");
?>
