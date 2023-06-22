<?php
/*pedir dos numeros por pantalla, imprimir si los dos son mayores de 10 "amobos son mayores de 10", si solo uno es mayor a 10 solo uno de los numeros es mayor a 10, si ninguno lo es deve decir, ninguno es mayor a 10 - Ejercicio de uso de operadores lógicos:
Escribe un programa que solicite al usuario que ingrese dos números. Luego, el programa debe imprimir si ambos
números son mayores que 10 utilizando la sentencia if y los operadores lógicos "&&" y ">". Si ambos números son
mayores que 10, el programa debe imprimir "Ambos números son mayores que 10". Si solo uno de los números es
mayor que 10, el programa debe imprimir "Solo uno de los números es mayor que 10". Si ninguno de los números
es mayor que 10, el programa debe imprimir "Ninguno de los números es mayor que 10".*/ 
$numero1 = intval(readline("Introduce un número "));
$numero2 = intval(readline("Introduce otro número "));
if($numero1>10 && $numero2>10){
    echo "Ambos números  son mayores a 10";
}
elseif($numero1<10 && $numero2>10){
    echo "Solo uno de los números es mayor que 10";
}
elseif($numero1>10 && $numero2<10){
    echo "Solo uno de los números es mayor que 10";
}
else{
    echo "Ninguno de los números es mayor que 10";
}
?>