<?php
include("conection.php");
$id = $_GET['id'];
$sql = "DELETE FROM habitacion WHERE id = $id";
mysqli_query($con, $sql);
header('Location: listar_habitacion.php')
?>

