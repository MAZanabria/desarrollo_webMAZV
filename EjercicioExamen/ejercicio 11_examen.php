<?php
class Examen {
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }

    public function cruzar() {
        $letras = array(str_split($this->cadena1), str_split($this->cadena2));
        if (count($letras) > 0) {
            echo '<table border="1">';
            foreach (str_split($this->cadena1) as $char1) {
                echo '<tr>';
                foreach (str_split($this->cadena2) as $char2) {
                    if ($char1 == $char2) {
                        echo '<td>' . $char1 . '</td>';
                    } else {
                        echo '<td></td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "No existen letras comunes.";
        }
    }
}
?>

