<?php

    require_once ("ClassTienda.php");

    $objProducto = new Tienda();

    $objProducto->setProducto("Monitor Asus", 150.99, 5);

    echo $objProducto->getProducto();

    echo "<br><br>";

    $objProducto->setCarrito("Monitor",2);
    $objProducto->setStock(2);

    echo $objProducto->getProducto();

    echo $objProducto->getCarrito();
?>