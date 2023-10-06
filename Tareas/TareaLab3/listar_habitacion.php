<?php
include("conection.php");
$sql = "SELECT H.id, nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion H INNER JOIN tipo_habitacion T ON H.id_tipo_habitacion = T.id";
$consulta = mysqli_query($con, $sql);
if(!$consulta){
    die("Eror en la consulta". mysqli_error($con));
}
?>

<table border='1'>
    <tr>
        <th>Nro.</th>
        <th>tipo habitacion</th>
        <th>Baño Privado</th>
        <th>espacio</th>
        <th>Precio</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($habitacion = mysqli_fetch_array($consulta)) { ?>
     <tr>
        <td><?php echo $habitacion['nro']; ?></td>
        <td><?php echo $habitacion['id_tipo_habitacion']; ?></td> 
        <td><?php echo $habitacion['bano_privado'] == 1 ? 'si' : 'no'; ?></td>
        <td><?php echo $habitacion['espacio']; ?></td>
        <td><?php echo $habitacion['precio']; ?></td>


        <td><a href="editar_habitacion_form.php?id=<?php echo $habitacion["id"] ?>">Editar</a></td>
        <td><a href="eliminar_habitacio.php?id=<?php echo $habitacion["id"] ?>">Eliminar</a></td>
    </tr>
    <?php } ?>

</table>
<a href="insertar_habitacion_form.php">Insertar</a>
