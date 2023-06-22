<?php
// Ejercicio de comparación múltiple:
// Escribe un programa que solicite al usuario que ingrese un número del 1 al 7. Luego, el programa debe imprimir el
// día de la semana correspondiente al número ingresado. Por ejemplo, si el usuario ingresa "1", el programa debe
// imprimir "Lunes". Si el número ingresado no está en el rango válido, el programa debe imprimir "Número inválido".
 
$numero= readline("Ingrese un numero del 1 al 7 ");
$dias = [
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
];
if ($numero >=1 and $numero <8){
    echo $dias8[$numero];
}
else{
    echo "Numero invalido";
};
?>
