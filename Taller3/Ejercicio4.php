<?php
//Desarrolla un programa que tome una fecha como entrada en formato 
//"díames-año" y muestre un mensaje diferente según el mes utilizando el ciclo
//`match`
$fecha =intval(readline("ingrese el dia\n"));
$mes =intval(readline("ingrese el mes\n"));
$año =intval(readline("ingrese el año\n"));

$resul= match (true) {
     $mes == 1 => "Es enero",
     $mes == 2 => "Es febrero",
     $mes == 3 => "Es marzo",
     $mes == 4 => "Es abril",
     $mes == 5 => "Es mayo",
     $mes == 6 => "Es junio",
     $mes == 7 => "Es julio",
     $mes == 8 => "Es agosto",
     $mes == 9 => "Es septiembre",
     $mes == 10 => "Es octubre",
     $mes == 11 => "Es noviembre",
     $mes == 12 => "Es diciembre",
     default => "numero incorrecto"
};
echo "su fecha es $fecha/$mes/$año y su mes es $resul"
?>