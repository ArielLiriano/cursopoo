<?php

require_once ("ClassMesa.php");

$objCama = new Producto("Cama",20000);
$arrayInfoProducto = $objCama->getInfoProducto();

print_r("<pre>");
print_r($arrayInfoProducto);
print_r("</pre>");

$objMueble = new Mueble("Closet",35000,"Casita","Cafe","Madera");
$arrayInfoMueble = $objMueble->getInfoProducto();

print_r("<pre>");
print_r($arrayInfoMueble);
print_r("</pre>");

$objMesa = new Mesa("Mesa de noche",1500,"Nochesita","Negro","Melamina","3 mts");
$objMesa->setForma("Redonda");
$arrayInfoMesa = $objMesa->getInfoProducto();

print_r("<pre>");
print_r($arrayInfoMesa);
print_r("</pre>");
?>