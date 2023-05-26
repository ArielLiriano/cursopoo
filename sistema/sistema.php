<?php

    require_once ("autoload.php");

    $objUsuario = new Usuario();

    //Insertar usuario
    // $insert = $objUsuario->insertUsuario("Pedro",8292223345,"pedro@gmail.com");
    // echo $insert;

    //Extraer todos los registros
    // $users = $objUsuario->getUsuarios();
    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";

    // $updateUser = $objUsuario->updateUser(1,"Alvin Then",8096591422,"alvinrd@gmail.com");

    // echo $updateUser;

    $user = $objUsuario->getUser(1);
    echo "<pre>";
    print_r($user);
    echo "</pre>";

    // $delete = $objUsuario->delUser(2);
    // echo $delete;
?>