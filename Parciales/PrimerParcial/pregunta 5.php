<?php
$con = new mysql( "bd_alumnos");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}

$sql="SELECT correo, nombre, rol, operacion WHERE 
WHERE  alumno";
echo $sql;
?>

