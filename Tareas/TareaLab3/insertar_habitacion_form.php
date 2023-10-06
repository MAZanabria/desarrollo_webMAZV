<?php
    include('conection.php');
    $sql = 'SELECT id, descripcion FROM tipo_habitacion';
    $consulta = mysqli_query($con, $sql);
?>
<form action="insertar_habitacion.php" method="post">
    <label for="nro">Nro.</label>
    <input type="number" name="nro">
    <br>
    <label for="id_tipo_habitacion">Tipo habitacion</label>
    <select name="id_tipo_habitacion">
        <?php while($tipohabitacion = mysqli_fetch_array($consulta)){ ?>
            <option value="<?php echo $tipohabitacion['id']?>"><?php echo $tipohabitacion['descripcion']?></option>
        <?php } ?>
    </select>
    <br>
    <label for="bano_privado">Baño privado</label>
    <input type="checkbox" name="bano_privado">
    <br>
    <label for="espacio">Espacio</label>
    <input type="number" name="espacio">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio">
    <br>
    <input type="submit" value="Insertar">
</form>