<?php
// Desarrollar un programa que determine si un número es primo o no. Un número es primo si
// solo es divisible por 1 y por sí mismo.
$numero = intval(readline("Ingrese un numero "));
$resultado = (($numero%2!==0) and ($numero%3!==0)and ($numero%5==0) and ($numero%7!==0))?"El numero SI es primo": "El numero NO es primo";
echo $resultado;
?>