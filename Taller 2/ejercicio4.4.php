<?php
/* Ejercicio de anidación de sentencias if:
Escribe un programa que solicite al usuario que ingrese su edad. Si la edad es mayor o igual a 18 años, el programa
debe preguntar si tiene licencia de conducir. Si la respuesta es "sí", el programa debe imprimir "Puedes conducir".
Si la respuesta es "no", el programa debe imprimir "Debes obtener una licencia de conducir primero". Si la edad es
menor de 18 años, el programa debe imprimir "No puedes conducir".*/

 $edad = intval(readline("Ingrese su edad   "));


 if($edad>=18){
   echo $pregunta = readline("¿Tiene licencia de conducir? ");
        if($pregunta =="si \n"){
            echo "Puedes conducir \n";
        }
        elseif($pregunta == "no"){
            echo "Debes tener una licencia de conducir primero";
         }
    }
    elseif($edad < 18){
    echo "No eres mayor de 18, no puedes conducir";
    }
?>