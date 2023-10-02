<!DOCTYPE html>
<html>
<head>
    <title>Dibujar</title>
</head>
<body>
    <?php
    require_once 'ejercicio 11_examen.php';

    if (isset($_POST['cadena1']) && isset($_POST['cadena2'])) {
        $cadena1 = $_POST['cadena1'];
        $cadena2 = $_POST['cadena2'];

        $examen = new Examen($cadena1, $cadena2);
        $examen->cruzar();
    } else {
        echo "No se han recibido cadenas válidas.";
    }
    ?>
</body>
</html>
