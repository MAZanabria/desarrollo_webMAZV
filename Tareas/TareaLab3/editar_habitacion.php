<?php
    include('conection.php');
    $id = $_POST['id'];
    $nro = $_POST['nro'];
    $idtipohabitacion = $_POST['id_tipo_habitacion'];
    $banoprivado = isset($_POST["bano_privado"])? 1:0;
    $espacio = $_POST['espacio'];
    $precio = $_POST['precio'];
    $sql = "UPDATE habitacion SET nro = $nro, id_tipo_habitacion = $idtipohabitacion, bano_privado = $banoprivado, espacio = $espacio, precio = $precio WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: listar_habitacion.php");
?>