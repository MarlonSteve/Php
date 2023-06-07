<?php 
$nombre= readline("Ingrese nombre del empleado \n");
$sueldo= readline("Ingrese el salario base \n");

$aumento = ($sueldo*0.15);
$salarioTotal = $aumento + $sueldo;

echo "Señor $nombre el aumento en su salario base es de $aumento por lo que ahora su sueldo es de: $salarioTotal \n";
?> 