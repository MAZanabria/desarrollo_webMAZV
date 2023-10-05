<?php
include("conection.php");
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['numero_camas'];
$sql = "UPDATE tipo_habitacion SET descripcion = '$descripcion', numero_camas=$numero_camas WHERE id = $id";
mysqli_query($con, $sql);
header("Location: listar_tipo_habitacion.php");
?>