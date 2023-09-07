<?php
require_once ("classPersona.php");
require_once ("classEmpleado.php");
require_once ("classCliente.php");

$objEmpleado = new Empleado(23,"Marlon",18);
$objEmpleado->setPuesto("Administrador");
echo $objEmpleado->getDatosPersonales();
echo "<br>";
echo "Puesto: ".$objEmpleado->getPuesto();

$objCliente = new Cliente (11,"Marlon",19);
 $objCliente->setCreditos(99);
 echo $objCliente->getDatosPersonales();
 echo"<br>";
 echo "Créditos: ".$objCliente->getCreditos();