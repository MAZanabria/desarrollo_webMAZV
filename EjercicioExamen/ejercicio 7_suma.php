<?php
$numero1=$_GET['numero1'];
$numero2=$_GET['numero2'];

$sumar=$numero1 + $numero2;

echo"Sumar";

echo "<table border='1' style='background-color: #34b912;'>";
echo "<tr><td>$numero1</td>
          <td>+</td> 
          <td>$numero2</td>
          <td>=</td>
          <td>$sumar</td></tr>";
echo "</table>";
?>