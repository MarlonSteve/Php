<?php 
// Escribir un programa que clasifique a un estudiante en Aprobado
// (nota mayor o igual a 60), Reprobado (nota menor a 60) o
// Sobresaliente (nota mayor o igual a 90).
$numero  = readline("Ingrese su calificacion  ");
if($numero>=60 && $numero <90){
    echo "$numero Aprobado ";
}
elseif($numero<60 ){
    echo "Reprobo ";
}
elseif($numero>=90 ){
    echo "Sobresaliente ";
}
?>