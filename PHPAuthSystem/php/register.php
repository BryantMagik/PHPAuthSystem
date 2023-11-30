<?php
require_once('php/funciones.php');
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
        echo '<div class="container-result register-error"> Email ya registrado</div>';
    } else {
        $datos = fopen('php/datos.csv', 'a+');
        $datosUsuario = array($getEmail, $pass_hash, $getNombre);
        fputcsv($datos, $datosUsuario);
        fclose($datos);
        echo '<div class="container-result register">Usuario registrado con éxito</div>';
    }

?>