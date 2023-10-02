<?php
session_start();
require_once 'ejercicio 12_cola.php';

if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola('Normal');
}

if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 'insertarDelante':
            if ($_SESSION['cola']->insertarDelante($_POST['elemento'])) {
                echo "Elemento insertado delante.";
            }
            break;

        case 'insertarDetras':
            $_SESSION['cola']->insertarDetras($_POST['elemento']);
            echo "Elemento insertado detrás.";
            break;

        case 'eliminar':
            $_SESSION['cola']->eliminar();
            echo "Elemento eliminado.";
            break;

        case 'mostrar':
            $cola = $_SESSION['cola']->mostrar();
            echo "Cola actual: " . implode(", ", $cola);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menú de Cola</title>
</head>
<body>
    <h1>Operaciones de Cola</h1>
    <form action="ejercicio 12_menu.php" method="post">
        <label>Tipo de Cola:</label>
        <select name="tipo">
            <option value="Normal">Normal</option>
            <option value="dobleentrada">Doble Entrada</option>
        </select>
        <br>

        <label>Elemento:</label>
        <input type="text" name="elemento"><br>

        <label>Operación:</label>
        <select name="opcion">
            <option value="insertarDelante">Insertar Delante</option>
            <option value="insertarDetras">Insertar Detrás</option>
            <option value="eliminar">Eliminar</option>
            <option value="mostrar">Mostrar</option>
        </select>
        <br>

        <input type="submit" value="Realizar Operación">
    </form>
</body>
</html>
