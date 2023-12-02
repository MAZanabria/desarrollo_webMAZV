<?php
include("conection.php");
$id = $_GET['id'];
$sql = "DELETE FROM libros WHERE id = $id";
mysqli_query($con, $sql);
header('Location: pregunta4.php')
?>