<?php 
//Escribe un programa que tome un número del 1 al 7 como entrada y muestre
//el nombre del día de la semana correspondiente utilizando el ciclo `match`.
$numeroDia = intval(readline("Ingrese un número del 1 al 7: "));
$resul= match (true) {
    1 => 
         "Lunes",
    2 =>
         "Martes",
    
    3 =>
         "Miércoles",

    4 =>
         "Jueves",
    
    5 =>
         "Viernes",
  
    6 =>
         "Sábado",
   
    7 =>
         "Domingo",
    default => 
        "El número ingresado no corresponde a ningún día de la semana";
    
}
echo $resultado

?>