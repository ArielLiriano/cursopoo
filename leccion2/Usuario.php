<?php

require_once "ClassUsuario.php";

$objUsuarioUno = new Usuario("Ariel Liriano", "ariel_5646@hotmail.com", "Admin");
$objAndrea = new Usuario("Andrea Perez", "andreaperez@hotmail.com", "Vendedor");

echo $objUsuarioUno->getPerfil();
echo "<br>";
echo $objAndrea->getPerfil();
$objAndrea->setCambiarClave("abc23");
echo "<br><br>";
echo $objAndrea->getPerfil();
?>