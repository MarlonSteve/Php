<?php
//
  function calcularDescuento(int $precioOriginal,  $descuento){
    $dsc=($precioOriginal*$descuento)/100;
    $precio=$precioOriginal-$dsc;
    return $precio;
  }
  $respuesta = calcularDescuento(2000,30);
  $respuesta = strtoupper("texto")
  echo "Precio es <br>".$respuesta;
 
?>