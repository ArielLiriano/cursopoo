<?php

    require_once ("autoload.php");

    $objUsuario = new Usuario();

    //Insertar usuario
    // $insert = $objUsuario->insertUsuario("Luis",8292223345,"luis@gmail.com");
    // echo $insert;

    //Extraer todos los registros
    $users = $objUsuario->getUsuarios();
    echo "<pre>";
    print_r($users);
    echo "</pre>";

    $updateUser = $objUsuario->updateUser(1,"Alvin Then",8096591422,"alvinrd@gmail.com");

    echo $updateUser;
?>