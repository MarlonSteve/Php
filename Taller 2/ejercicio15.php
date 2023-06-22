<?php
// Escribir un programa que calcule el descuento aplicable a una compra de acuerdo al
// monto total:
//  - Si el monto es mayor o igual a $1000, aplicar un descuento del 10%.
//  - Si el monto es mayor o igual a $500, aplicar un descuento del 5%.
//  - Si el monto es menor a $500, no aplicar descuento.
$monto = intval(readline("Ingrese un monto "));

if ($monto >= 500) {
    $res = ($monto>=1000)?($monto*0.1):($monto*0.05);
    echo "Descuento del 10%"
} elseif ($monto >= 500) {
    $descuento = $monto * 0.05;
    echo $res;
}
else{
   echo "No aplica descuento";
}
?>