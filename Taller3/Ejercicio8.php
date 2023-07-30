<?php 
//Desarrolla un programa que tome una cadena de texto como entrada y
//muestre un mensaje según la longitud de la cadena utilizando el ciclo `match`.
//Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena es
//larga"
$cadena = readline("Ingrese una cadena de texto: ");
$longitud = strlen($cadena);
$longitud = match (true) {
    $longitud >=25 =>"La cadena es larga " ,
    $longitud >=5 =>"La cadena es mediana ", 
    $longitud >=15=>"La cadena no es corta " 
   };
  echo $longitud
?>