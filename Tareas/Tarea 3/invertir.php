<?php
if(isset($_POST['cadena'])){
    $cadena = $_POST['cadena'];
    $cadenaInvertida = strrev($cadena);
} else{
    $cadenaInvertida = 'No se proporciono ninguna cadena.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena Invertida </title>
</head>
<body>
    <h1>Cadena Invertida</h1>
    <?php if(!empty($cadenaInvertida)) : ?>
        <p>La cadena invertida es: <?php echo $cadenaInvertida; ?> </p>
    <?php else: ?>
        <p>No se pudo invertir la cadena. </p>
    <?php endif; ?>
    <a href="formulario2.html">Volver al formulario</a>
</body>
</html>