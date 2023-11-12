<?php session_start();
include ("conexion.php");
$sql="SELECT usuario, nombreCompleto, nivel from usuarios 
	";
//echo $//sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
		<th><a href="listar.php?ordenar=usuario">correos</a></th>
		<th><a href="listar.php?ordenar=nombrecompleto">nombre completo </a></th>
		<th><a href="listar.php?ordenar=nivel">nivel </a></th>
	</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila["usuario"]; ?> </td>
 	<td><?php echo $fila["nombrecompleto"]; ?> </td>
 	<td><?php echo $fila["nivel"]; ?> </td>
 </tr>
<?php } ?>   
