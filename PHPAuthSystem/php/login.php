<?php
require_once('funciones.php');
$getEmail = analizar('email');
$getPassword = analizar('passwd');

$autenticado = false;
$datos = fopen('php/datos.csv', 'r');

while (($fila = fgetcsv($datos)) !== false) {
    $emailArchivo = $fila[0];
    $passwordArchivo = $fila[1];
    $nombreArchivo = $fila[2];
    
    if (($emailArchivo === $getEmail) && password_verify($getPassword,$passwordArchivo)) {
        $autenticado = true;
        session_start();
        $_SESSION['login_user'] = $nombreArchivo;
        break;
    }
}

if ($autenticado) {
    header('Location: php/mainpage.php');
} else {
    
}
fclose($datos);

