<?php
function analizar($datos)
{
    return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
}

function registrarUsuario($emailReg, $passwdReg, $nombreReg)
{

    $pass_hash = password_hash($passwdReg, PASSWORD_DEFAULT);
    $emailExistente = false;
    $datos = fopen('datos.csv', 'r');
    while (($fila = fgetcsv($datos)) !== false) {
        $emailComprobar = $fila[0];
        if ($emailReg === $emailComprobar) {
            $emailExistente = true;
            break;
        }
    }

    if ($emailExistente) {
        echo "Ya existe el email";
    } else {
        $datos = fopen('datos.csv', 'a+');
        $datosUsuario = array($emailReg, $pass_hash, $nombreReg);
        fputcsv($datos, $datosUsuario);
        fclose($datos);
        echo "Usuario registrado con éxito";
    }

}

