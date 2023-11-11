<?php
    $numero =  $_POST['numero'];
    $operacion =  $_POST['operacion'];
    $hasta = $_POST['hasta'];
    $acum = $_POST['acum'];

    $respuesta = array();
    for($i = 1; $i <= $hasta; $i++){
        switch ($operacion) {
            case 'suma':
                $fila = array(
                    "valor1" => $numero,
                    "signo" => "+",
                    "valor2" => $i,
                    "signo2" => "=",
                    "resultado" => $numero + $i
                );
                break;
            case 'resta':
                $fila = array(
                    "valor1" => $numero,
                    "signo" => "-",
                    "valor2" => $i,
                    "signo2" => "=",
                    "resultado" => $numero - $i
                );
                break;
            case 'factorial':
                $acum = 1;
                  for($i=1; $i<=$numero; $i++){
                    $acum*=$i;
                    $resultado= $i;
                    $fila = array(
                        "valor1" =>"factorial",
                        "signo" => $numero,
                        "valor2" => $i,
                        "signo2" => "=",
                        "resultado" => $i
                    );
                  }
               
                break;
        }   
        array_push($respuesta, $fila);
    }
    echo json_encode($respuesta);
?>

	