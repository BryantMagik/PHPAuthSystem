<?php
require_once('php/funciones.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $getNombre = analizar('nombreReg');
    $getEmail = analizar('emailReg');
    $getPassword = analizar('passwdReg');
    /*VERIFICACIÓN PASSWORD*/
    registrarUsuario($getEmail, $getPassword, $getNombre);
}

?>