<?php
//Escribe un programa que tome un número entero como entrada y muestre un
//mensaje diferente dependiendo de si el número es 1, 2, o 3 utilizando el ciclo
//`match`
$numero = intval(readline("Ingrese un número entero: "));
$result= match ($numero) {
    1 =>  " número ingresado es 1",
    2 =>  " ingreso el numero 2",
    3 =>  "El número   es 3",
    default =>  "El número ingresado no es 1, 2 ni 3"
    
};
echo $result


?>





