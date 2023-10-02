<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Damas</title>
</head>
<body>
    <?php
    function imprimirTablero($filas, $columnas, $color) {
        echo '<table border="1">';
        for ($i = 0; $i < $filas; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $columnas; $j++) {
                echo '<td style="width: 40px; height: 40px; background-color: ' . $color . ';"></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    $filas = 6;
    $color='white';
    $columnas = 5;
    $color = 'blue';

    imprimirTablero($filas, $columnas, $color);
    ?>
</body>
</html>
