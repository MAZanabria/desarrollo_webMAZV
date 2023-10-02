<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-spacing: 0;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
    $rows = $_GET['rows'];
    $cols = $_GET['cols'];
?>

<table border=1>
    <?php for($i = 0; $i < $rows+1; $i++){ ?>
    <tr>
        <?php for($j = 0; $j < $cols+1; $j++){ 
            if($i == 0 && $j == 0){ ?>
                <td style="background-color:gray"></td>
            <?php } elseif($i == 0){ ?>
                <td style="background-color:gray"><?php echo $j ?></td>
            <?php } elseif($j == 0){ ?>
                <td style="background-color:gray"><?php echo $i ?></td>
            <?php } else{ ?>
                <td><?php echo $i*$j ?></td>
            <?php } ?>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
</body>
</html>