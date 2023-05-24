<?php

require_once ("ClassOperacion.php");
require_once ("OperacionesBasicas.php");

$objRaiz = new Calcular();

echo "Resultado de la raiz cuadrada: ". $objRaiz->raizcuadrada(9);

echo "<br><br>";

echo "Resultado de la potencia: ". $objRaiz->potencia(9,3);
echo "<br><br>";
echo "Resultado de la operacion: ". $objRaiz->op_basicas(50,2,"+");
?>