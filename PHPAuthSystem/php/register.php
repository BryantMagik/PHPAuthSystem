<?php
require_once('php/funciones.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $getNombre = analizar('nombreReg');
    $getEmail = analizar('emailReg');
    $getPassword = analizar('passwdReg');

    $pass_hash = password_hash($getPassword, PASSWORD_DEFAULT);
    $emailExistente = false;

    $datos = fopen('php/datos.csv', 'r');
    while (($fila = fgetcsv($datos)) !== false) {
        $emailComprobar = $fila[0];
        if ($getEmail === $emailComprobar) {
            $emailExistente = true;
            break;
        }
    }

    if ($emailExistente) {
        echo "Ya existe el email";
    } else {
        $datos = fopen('php/datos.csv', 'a+');
        $datosUsuario = array($getEmail, $pass_hash, $getNombre);
        fputcsv($datos, $datosUsuario);
        fclose($datos);
        echo "Usuario registrado con éxito";
    }
}

?>