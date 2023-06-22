<?php
// Crear un programa que determine si un número es par o impar.
$numero= intval(readline("Introduce un numero  "));
if(($numero%2)==0){
    echo "Numero par";
}
else{
    echo "Numero impar";
}

?>