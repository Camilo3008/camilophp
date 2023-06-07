<?php
$a = 7;

$b = 3;

$suma = $a + $b;

$resta = $a - $b;

$multiplicacion = $a * $b ;

$divicion = $a / $b;

echo "Resultados <br>";

echo "la suma entre 7 y 3 es: $suma \n";
echo "la resta entre 7 y 3 es: $resta \n";
echo "la multiplicacion entre 7 y 3 es: $multiplicacion \n";
echo "la divicion entre 7 y 3 es:$divicion \n \n";
echo "Ejercicio 1 \n";



echo "Un empleado el cual tiene un sueldo base de $2.500.000 necesita saber cuánto
será su pago, si de su sueldo base le descuenta un 10% por aportes. Diseñe un
algoritmo lógico en donde asigne valores a diferentes variables y guarde datos
resultantes para posteriormente ser mostrados en pantalla y ayudar al empleado
con sus finanzas. \n";

$sueldo = 2500000;

$descuento = 2500000 * 10 /100;

$total = $sueldo - $descuento;
echo "Dinero que se le descuenta : $descuento \n";

echo "Sueldo final: $total";



?>