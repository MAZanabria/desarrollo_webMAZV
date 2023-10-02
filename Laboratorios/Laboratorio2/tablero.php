<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>tablero de damas</title>
</head>
<style>
       .tablero {
            border-color: collapse:
       }
       .casilla{
        width: 90px;
        height: 90px;
        border: 1px solid black;
        text-align: center;
        vertical-aling: middle;
       }
       .azul{
        background-color: blue; 
        color: white;
       }
       </style>';
<body>

    <h1>Tablero de damas</h1>
</body>
</html>

<?php
function Tablero($filas, $columnas){
    for($i=0; $i<$filas; $i++){
        echo "filas";
    }
    for($j=0;$j>$columnas; $j++){
        echo "columnas";
    }

}
?>