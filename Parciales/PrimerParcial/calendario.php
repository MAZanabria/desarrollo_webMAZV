<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <style>
        body {
            background-color: #F79646;
        }
        table {
            width: 100%;
            height: 150px;
            text-align: center;
        }
        th, td {
            width: 14.28%;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    
    if (isset($_POST['mes']) && isset($_POST['ano'])) {
        
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        
        $num_dias = date("t", mktime(0, 0, 0, $mes, 1, $ano));
        $primer_dia_semana = date("N", mktime(0, 0, 0, $mes, 1, $ano));

        $dias_semana = array("Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom");

        echo '<table>';
        echo '<tr>';
        foreach ($dias_semana as $dia) {
            echo '<th>' . $dia . '</th>';
        }
        echo '</tr>';

    
        $dia_actual = 1;
        for ($i = 1; $i <= 6; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 7; $j++) {
                if (($i == 1 && $j < $primer_dia_semana) || $dia_actual > $num_dias) {
                    echo '<td></td>';
                } else {
                    echo '<td>' . $dia_actual . '</td>';
                    $dia_actual++;
                }
            }
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Por favor, ingresa un mes y un año en el formulario anterior.</p>';
    }
    ?>
</body>
</html>

