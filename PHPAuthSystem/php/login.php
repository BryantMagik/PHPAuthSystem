<?php

require_once('funciones.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $getUser = analizar('user');
    $getPassword = analizar('password');

    /*
    $hash_default_salt = password_hash($getPassword, PASSWORD_DEFAULT);
    $hash_variable_salt = password_hash($getPassword, PASSWORD_DEFAULT, array('cost' => 9));
    */

    if (($datos = fopen('php/datos.csv', 'r')) !== false) {
        autenticarUsuario($getUser, $getPassword, $datos);
        fclose($datos);
    } else {
        echo "No se pudo abrir el archivo de usuarios.";
    }
}
