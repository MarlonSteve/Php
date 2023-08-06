<?php
//Diseño un codigo que genere un ciclo for anidado para imprimir las tablas de multiplicar del 1 al 10
"<table>"
for($numero=1;$numero<=10;$numero++){
    
    for($i=1;$i<=10;$i++){
        $resultado= $numero * $i;
        echo "$numero x $i = $resultado". "<br>";
   }
}

?>