<?php
// Crear un programa que determine si un año es bisiesto o no. Un año
// es bisiesto si es divisible por 4 y no divisible por 100, o si es divisible
// por 400.
$año = intval(readline("Ingrese un año  "));

if (($año % 4 == 0 && $año % 100 != 0) or $año % 400 == 0) {
    echo "El año $año es bisiesto.";
}
 else {
    echo "El año $año no es bisiesto.";
}
?> 