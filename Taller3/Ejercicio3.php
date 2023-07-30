<?php
//Diseña un programa que tome una letra como entrada y muestre un mensaje
//según la categoría a la que pertenezca la letra utilizando el ciclo `match`. Por
//ejemplo, si la letra es una vocal, mostrar "Es una vocal".
$letra = readline("Ingrese una letra: ");
$a="a";
$e="e";
$i="i";
$o="o";
$u="u";

$resul = match ($letra) {
     $a=>"su letra es vocal \n" ,
     $e=>"su letra es vocal \n" ,
     $i=>"su letra es vocal \n" ,
     $o=>"su letra es vocal \n" ,
     $u=>"su letra es vocal \n" ,
     default=> "Es una consonante\n"
};
echo $resul

?>