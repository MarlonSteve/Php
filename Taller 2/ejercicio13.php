<?php
// Crear un programa que determine si una letra ingresada es una vocal o una consonante.
$letra = readline("Ingrese una letra ");

if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo "La letra $letra es una vocal.";
} elseif (
    $letra == 'b' || $letra == 'c' || $letra == 'd' || $letra == 'f' || $letra == 'g' ||
    $letra == 'h' || $letra == 'j' || $letra == 'k' || $letra == 'l' || $letra == 'm' ||
    $letra == 'n' || $letra == 'ñ' || $letra == 'p' || $letra == 'q' || $letra == 'r' ||
    $letra == 's' || $letra == 't' || $letra == 'v' || $letra == 'w' || $letra == 'x' ||
    $letra == 'y' || $letra == 'z'
) {
    echo "La letra $letra es una consonante.";
} else {
    echo "No es una letra.";
}
?>