<?php
require_once ("ClassEmpleado.php");
require_once ("ClassCliente.php");

$objEmpleado = new Empleado(78978, "Juan Pérez", 28);
$objEmpleado->setPuesto("Administrador");
$objEmpleado->setMensaje("Bienvenido Empleado ");

echo $objEmpleado->getMensaje();
echo $objEmpleado->getDatosPersonales();
echo "Puesto: ". $objEmpleado->getPuesto();

echo "<br><br>";
$objCliente = new Cliente(525846, "Luis Jimenez", 35);
$objCliente->setCredito(number_format(20000),2);
$objCliente->setMensaje("Bienvenido Cliente ");

echo $objCliente->getMensaje();
echo $objCliente->getDatosPersonales();
echo "Límite de crédito: ". $objCliente->getCredito();
?>