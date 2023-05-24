<?php

require_once("ClassOperacion.php");

$operacion1 = new Operacion(10,2);
$operacion2 = new Operacion(100,3);

$totalSuma = $operacion1->getSuma();
$totalResta = $operacion1->getResta();
$totalMultiplicacion = $operacion1->getMultiplicacion();
$totalDivision = $operacion1->getDivision();

echo "Resultado de la suma: ". $totalSuma;
echo "<br>";
echo "Resultado de la resta: ". $totalResta;
echo "<br>";
echo "Resultado de la multiplicacion: ". $totalMultiplicacion;
echo "<br>";
echo "Resultado de la division: ". $totalDivision;

echo "<br><br>";

$totalSuma = $operacion2->getSuma();
$totalResta = $operacion2->getResta();
$totalMultiplicacion = $operacion2->getMultiplicacion();
$totalDivision = $operacion2->getDivision();

echo "Resultado de la suma: ". $totalSuma;
echo "<br>";
echo "Resultado de la resta: ". $totalResta;
echo "<br>";
echo "Resultado de la multiplicacion: ". $totalMultiplicacion;
echo "<br>";
echo "Resultado de la division: ". $totalDivision;

?>