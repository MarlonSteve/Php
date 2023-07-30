<?php
//Crea un programa que reciba un número del 1 al 12 como entrada y muestre el
//nombre del mes correspondiente utilizando el ciclo `match`.
$numero=intval(readline("Ingrese un número del 1 al 12: "));


$resul = match (true) {
    $numero == 1=> "Enero",
    $numero == 2=> "Febrero",
    $numero == 3=> "Marzo",
    $numero == 4=> "Abril",
    $numero == 5=> "Mayo",
    $numero == 6=> "Junio",
    $numero == 7=> "Julio",
    $numero == 8=> "Agosto",
    $numero == 9=> "Septiembre",
    $numero == 10=> "Octubre",
    $numero  == 11=> "Noviembre",
    $numero  == 12=> "Diciembre",
     default=> "El número ingresado no corresponde a ningún mes"
};
 echo $resul
?>