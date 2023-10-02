<?php
include 'fuciones.php';
if(isset($_POST['cadena'])){
    $cadena =$_POST['cadena'];
    $palabraMasLarga = PalabraMasLarga($cadena);

} else{
    $palabraMasLarga = 'No se inserto una dato. ';

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado palabra mas larga</title>
</head>
<body>
    <h1>El resultado de palabra mas larga</h1>
    <?php if (!empty($palabraMasLarga)) : ?>
        <p>No se encontro una palabra mas larga</p>
    <?php endif; ?>
    <a href="formulario.html"> volver al formulario</a>



    
</body>
</html>