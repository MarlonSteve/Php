<?php
// Escribir un programa que verifique si un número es positivo, negativo
// o cero
$numero= intval(readline("Introduce un numero  "));
if($numero>1){
    echo "numero es positivo";
}
elseif($numero<-1){
    echo "numero es negativo";
}
else{
    echo "numero es 0";
}
?>