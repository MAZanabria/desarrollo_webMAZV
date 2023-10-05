<?php
     include('conection.php');
    $id = $_GET['id'];
    
    $sql = "SELECT id, descripcion FROM tipo_habitacion";
    $sql2 = "SELECT * FROM habitacion WHERE id = $id";
    $consulta = mysqli_query($con, $sql);
    $consulta2 = mysqli_query($con, $sql2);
    $habitacion = mysqli_fetch_array($consulta2);
?>
<form action="editar_habitacion.php" method="post">
    <input type="hidden" name='id' value="<?php echo $habitacion['id']?>">
    <label for="nro">Nro.</label>
    <input type="number" name="nro" value="<?php echo $habitacion['nro']?>">
    <br>
    <label for="tipohabitacion">Tipo habitacion</label>
   <input type="number" name="tipohabitacion" value="<?php echo $habitacion['tipohabitacion']?>">
    <br>
    <label for="banoprivado">Baño privado</label>
    <input type="checkbox" name="banoprivado" <?php echo $habitacion['banoprivado'] == 1? 'checked' : ''?>>
    <br>
    <label for="espacio">Espacio</label>
    <input type="number" name="espacio" value="<?php echo $habitacion['espacio']?>">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="<?php echo $habitacion['precio']?>">
    <br>
    <input type="submit" value="Editar">
</form>