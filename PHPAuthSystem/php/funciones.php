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
function registrarUsuario($usuarioReg, $passwdReg, $emailReg, $nombreReg, $apellidoReg)
{

    $pass_hash = password_hash($passwdReg, PASSWORD_DEFAULT);

    $datos = fopen('datosTEST.csv', 'w+');

    $datosUsuario = array($usuarioReg, $pass_hash, $emailReg, $nombreReg, $apellidoReg);

    foreach ($datosUsuario as $datos) {
        fputcsv($datos, $datosUsuario);
    }

    fclose($datos);

}
function existe()
{
}
