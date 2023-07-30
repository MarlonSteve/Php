<?php
//Crea un programa que reciba el nombre de un color como entrada y muestre
//un mensaje diferente según el color utilizando el ciclo `match`. Por ejemplo, si el
//color es "rojo", mostrar "El color es cálido"
$color = readline("Ingrese el nombre de un color ya se azul,amarillo o rojo: ");
$azul= "azul";
$amarillo= "amarillo";
$rojo= "rojo";
$resul = match ($color) {
     $azul=>"El color es frío" ,
     $amarillo=>"El color es brillante" ,
     $rojo=>"El color es cálido",
     default=> "No se reconoce el color ingresado"
};

echo $resul

?>





