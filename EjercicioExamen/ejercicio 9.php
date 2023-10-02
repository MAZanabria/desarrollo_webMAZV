<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla intercalado</title>
    <style>
        table{
            border-spacing: 0;
        }
        td{
            width: 30px;
            height: 10px
        }
    </style>
</head>
<body>
<?php
    $rows = $_GET['rows'];
    $cols = $_GET['cols'];
    $colores = array("red", "yellow", "green");
?>

<table border=1>
    <?php for($i = 0; $i < $rows+1; $i++){ ?>
        <tr>
            <?php for($j = 0; $j < $cols+1; $j++){ 
                    $color = $colores[$i%count($colores)];
                ?>
                <td style="background-color: <?php echo $color ?>">
                    <?php echo $i%count($colores); ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>