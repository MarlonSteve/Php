<?php
// Desarrollar un programa que indique el rango de una calificación de acuerdo a la siguiente
// tabla:
//  - 90-100: Excelente
//  - 80-89: Bueno
//  - 70-79: Regular
//  - 60-69: Aprobado
//  - 0-59: Reprobado
$calificacion = readline("Ingrese calificacion ");

if ($calificacion >= 90 && $calificacion <= 100) {
    echo "Calificación: $calificacion  Excelente";
} elseif ($calificacion >= 80 && $calificacion <= 89) {
    echo "Calificación: $calificacion  Bueno";
} elseif ($calificacion >= 70 && $calificacion <= 79) {
    echo "Calificación: $calificacion  Regular";
} elseif ($calificacion >= 60 && $calificacion <= 69) {
    echo "Calificación: $calificacion  Aprobado";
} else {
    echo "Calificación: $calificacion  Reprobado";
}
?>