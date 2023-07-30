<?php
//Escribe un programa que tome una hora en formato "HH:MM" como entrada y
//muestre un mensaje diferente según la franja horaria utilizando el ciclo `match`.
$horas=intval(readline("Ingrese una hora en formato 'HH:MM': "));
$horaria=  intval(readline("Ingrese la franja horaria que desea saber "));
$suma = ($horas+100);
$suma2= ($horas+200);
$suma3= ($horas+300);
$suma4= ($horas+400);
$resul= match ($horaria) {
    1 => "en alemania son las $suma " ,
    2 => "en ucranea son las $suma2",
    3 => "en catar son las $suma3",
    4 => "en armenia son las $suma4"
};
echo $resul
?>