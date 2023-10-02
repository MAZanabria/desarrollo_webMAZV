<?php
if(isset($_GET['numero'])){
    $tamanio = intval($_GET['numero']);
} else {
    $tamanio = 8;
}
echo "<h1>Tablero de ajedres ($tamanio * $tamanio)</h1>";

echo '<style>
       .tablero {
            border-color: collapse:
       }
       .casilla{
        width: 50px;
        height: 50px;
        border: 1px solid black;
        text-align: center;
        vertical-aling: middle;
       }
       .negra{
        background-color: #333;
        color: white;
       }
       </style>';
echo '<table class="tablero">';
for($i = 1; $i <= $tamanio; $i++){
    echo '<tr>';

for ($j = 1; $j <= $tamanio; $j++){
    $casillaClase = ($i + $j) % 2 == 0 ? 'casilla negra' : 'caasilla';
    echo "<td class='$casillaClase'>$i,$j</td>";

}
echo '</tr>';
}
echo '</table>';
?>
