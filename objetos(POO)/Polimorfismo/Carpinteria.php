<?php

require_once ("classMesa.php");


function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
$objCama = new Producto ("cama",10.00);
$arrInfo = $objCama -> getInfoProducto();
dep($arrInfo);

echo "<br>";
$objMueble = new Mueble ("closet", 20.00, "negro", "madera");
$arrInfo = $objMueble -> getInfoProducto();
dep($arrInfo);

?>