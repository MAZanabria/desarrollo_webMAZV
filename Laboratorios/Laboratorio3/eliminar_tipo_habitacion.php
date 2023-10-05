<?php
include("conection.php");
$id = $_GET['id'];
$sql = "DELETE FROM tipo_habitacion WHERE id = $id";
mysqli_query($con, $sql);
header('Location: listar_tipo_habitacion.php')
?>
