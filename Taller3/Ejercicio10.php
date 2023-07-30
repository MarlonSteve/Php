<?php
//Crea un programa que reciba una opción del 1 al 5 como entrada y realice una
//acción diferente según la opción utilizando el ciclo `match`.
$numero= intval(readline("Ingrese una opción del 1 al 5: "));

$resul= match ($numero) {
   1=> "Realizando acción 1",
   2=> "Realizando acción 2",
   3=> "Realizando acción 3",
   4=>  "Realizando acción 4",
   5=> "Realizando acción 5",
    default=>"La opción ingresada no es válida" 
};
echo $resul
?>