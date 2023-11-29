<?php


function analizar($datos)
{
    return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
}
function autenticarUsuario($usuario, $password, $datos)
{
    $autenticado = false;

    if (!empty($datos)) {

        while (($fila = fgetcsv($datos)) !== false) {
            $usuarioArchivo = $fila[0];
            $passwordArchivo = $fila[1];

            if (($usuarioArchivo === $usuario) && ($password === $passwordArchivo)) {
                $autenticado = true;
                header('Location: php/mainpage.html');
                break;
            }
        }
    }

    if ($autenticado) {
        echo "Éxito";
    } else {
        echo "Fallido";
    }
}
function registrarUsuario($usuarioReg, $passwdReg, $getEmail, $nombreReg, $nombreApellido)
{
    $hash5_password = $passwdReg;
    $datos = fopen('datos.csv', 'w');
    $linea = fputcsv('datos.csv',);

}
function existe()
{
}
