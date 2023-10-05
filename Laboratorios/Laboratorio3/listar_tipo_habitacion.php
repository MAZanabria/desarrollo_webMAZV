<?php
include("conection.php");
$sql = "SELECT * From tipo_habitacion";
$consulta = mysqli_query($con, $sql);
?>

<table border='1'>
    <tr>
        <th>Descripcion</th>
        <th>Nro. de camas</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($tipohabitacion = mysqli_fetch_array($consulta)) { ?>
     <tr>
        <td><?php echo $tipohabitacion['descripcion']; ?></td>
        <td><?php echo $tipohabitacion['numero_camas']; ?></td> 

        <td><a href="editar_tipo_habitacion.php?id=<?php echo $tipohabitacion['id']; ?>">Editar</a></td>
        <td><a href="eliminar_tipo_habitacion.php?id=<?php echo $tipohabitacion['id']; ?>">Eliminar</a></td>
    </tr>
    <?php } ?>

</table>
<a href="form_insertar_tipo_habitacion.html">Insertar</a>