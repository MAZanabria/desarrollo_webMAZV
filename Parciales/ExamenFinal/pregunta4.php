<?php
include ("conection.php");
$sql = "SELECT id, anio, autor, idcarrera, ideditorial, idusuario, titulo FROM libros ";
$consulta = mysqli_query($con, $sql);
if(!$consulta){
    die("Error en la consulta". mysqli_error($con));
}
?>

<table border='1'>
    <tr>
        <th>Id</th>
        <th>Año</th>
        <th>Autor</th>
        <th>IdCarrera</th>
        <th>IdEditorial</th>
        <th>IdUSuario</th>
        <th>Titulo</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($libro = mysqli_fetch_array($consulta)) { ?>
     <tr>
        <td><?php echo $libro['id']; ?></td>
        <td><?php echo $libro['anio']; ?></td> 
        <td><?php echo $libro['autor']; ?></td>
        <td><?php echo $libro['idcarrera']; ?></td>
        <td><?php echo $libro['ideditorial']; ?></td>
        <td><?php echo $libro['idusuario']; ?></td>
        <td><?php echo $libro['titulo']; ?></td>
        
        <td><a href="editar_libro.php?id=<?php echo $libro["id"] ?>">Editar</a></td>
        <td><a href="eliminar.php?id=<?php echo $libro["id"] ?>">Eliminar</a></td>
    </tr>
    <?php } ?>

</table>
<a href="insertar_libro_form.php">Insertar</a>
