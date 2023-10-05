<?php
include("conection.php");
$id  =$_GET['id'];
$sql= "SELECT * FROM tipo_habitacion WHERE id = $id";
$consulta = mysqli_query($con, $sql);
$tipohabitacion = mysqli_fetch_array($consulta);

?>

<form action="editar_tipo_habit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $tipohabitacion['id']?>">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $tipohabitacion['descripcion']?>">
    <br>
    <label for="numero_camas">Nro. de camas</label>
    <input type="number" name="numero_camas" value="<?php echo $tipohabitacion['numero_camas']?>">
    <br>
    <input type="submit" value="Editar">
</form>