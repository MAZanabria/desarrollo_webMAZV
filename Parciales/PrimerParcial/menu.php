<?php session_start();
include 'Calculadora.php';

if (isset($_SESSION['numero1']) && isset($_SESSION['numero2']) && isset($_GET['operacion'])) {
    $numero1 = floatval($_SESSION['numero1']);
    $numero2 = floatval($_SESSION['numero2']);
    $operacion = $_SESSION['operacion'];

    $calculadora = new Calculadora($numero1, $numero2);

    switch ($operacion) {
        case 'sumar':
            $resultado = $calculadora->sumar();
            break;
        case 'restar':
            $resultado = $calculadora->restar();
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar();
            break;
        case 'dividir':
            $resultado = $calculadora->dividir();
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }
} else {
    $resultado = "Por favor, ingresa dos números y selecciona una operación.";
}

echo "Resultado: " . $resultado;
?>


