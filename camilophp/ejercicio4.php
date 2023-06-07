<?php
echo "Ejecicio 4 \n";

$nombre = readline("Ingrese su nombre \n");

$sueldo = readline("su sueldo base \n");  

$aumento = $sueldo * 15 / 100 ; 


$totalapagar = $sueldo + $aumento;  

echo "Su aumento es de: $aumento \n";

echo "Señor $nombre su sueldo total es de $totalapagar \n ";

?>