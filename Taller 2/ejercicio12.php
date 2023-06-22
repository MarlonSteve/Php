<?php
//  Escribir un programa que muestre el día de la semana correspondiente a un número del 1 al
// 7. Considera que 1 es Lunes y 7 es Domingo
$numeroDia = readline("Ingrese un numero ");

if ($numeroDia == 1) {
    echo "El número $numeroDia corresponde al día Lunes.";
} elseif ($numeroDia == 2) {
    echo "El número $numeroDia corresponde al día Martes.";
} elseif ($numeroDia == 3) {
    echo "El número $numeroDia corresponde al día Miércoles.";
} elseif ($numeroDia == 4) {
    echo "El número $numeroDia corresponde al día Jueves.";
} elseif ($numeroDia == 5) {
    echo "El número $numeroDia corresponde al día Viernes.";
} elseif ($numeroDia == 6) {
    echo "El número $numeroDia corresponde al día Sábado.";
} elseif ($numeroDia == 7) {
    echo "El número $numeroDia corresponde al día Domingo.";
} else {
    echo "El número ingresado no es válido.";
}
?>





