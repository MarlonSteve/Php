<?php
//Diseña un programa que tome una nota numérica del 0 al 100 como entrada y
//muestre un mensaje diferente según el rango de la nota utilizando el ciclo
//`match`. Por ejemplo, si la nota está entre 90 y 100, mostrar "Excelente".
$numero = intval(readline("Ingrese una nota numérica del 0 al 100: "));

$resul = match (true) {
    $numero >=70 => "Excelente",
    $numero >= 50  => "Buena",
    $numero <= 49  => "Mala",
    
};
echo $resul
?>