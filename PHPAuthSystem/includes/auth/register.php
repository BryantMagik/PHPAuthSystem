<?php
require_once('php/funciones.php');
    $getNombre = analizar('nombreReg');
    $getEmail = analizar('emailReg');
    $getPassword = analizar('passwdReg');
    $getApellido = analizar('apellidoReg');

    $pass_hash = password_hash($getPassword, PASSWORD_DEFAULT);
    $emailExistente = false;


?>