<?php
require_once('funciones.php');
$getEmail = analizar('email');
$getPassword = analizar('passwd');

$autenticado = false;
$datos = fopen('datos.csv', 'r');

while (($fila = fgetcsv($datos)) !== false) {
    $emailArchivo = $fila[0];
    $passwordArchivo = $fila[1];

    if (($emailArchivo === $getEmail) && password_verify($getPassword,$passwordArchivo)) {
        $autenticado = true;
        header('Location: php/mainpage.html');
        exit();
    }
}
fclose($datos);

if ($autenticado) {

} else {
    
}
