<?php
include("conection.php");
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['numero_camas'];
$sql ="INSERT INTO tipo_habitacion(descripcion, numero_camas) VALUES ('$descripcion',$numero_camas)";
//echo $sql;
mysqli_query($con, $sql);
header('Location: listar_tipo_habitacion.php')
?>
