<?php
class Cola {
    private $tipo;
    private $cola;

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->cola = [];
    }

    public function insertarDelante($elemento) {
        if ($this->tipo === 'dobleentrada') {
            array_unshift($this->cola, $elemento);
        } else {
            echo "No se puede insertar delante en una cola de tipo 'Normal'.";
        }
    }

    public function insertarDetras($elemento) {
        array_push($this->cola, $elemento);
    }

    public function eliminar() {
        if (!empty($this->cola)) {
            array_shift($this->cola);
        } else {
            echo "La cola está vacía, no se puede eliminar.";
        }
    }

    public function mostrar() {
        return $this->cola;
    }
}
?>
