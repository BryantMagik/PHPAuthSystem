<?php
session_start();

# Función para limpieza de código malicioso.
function analizar($datos)
{
    return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Analizar al obtener los datos del formulario de inicio de sesión.
    $user = analizar('user');
    $passwd = analizar('passwd');

    $users = fopen('php/csv/users_aula_virtual.csv', 'r');
    $autenticado = false;

    while (($fila = fgetcsv($users)) !== false) {
        $passUser = $fila[2];
        # Verificaciones de las credenciales mediante el uso de md5.
        if (($user === $fila[1]) && md5($passwd) === $passUser) {
            # Si tenemos coincidencia, se guardan la información.
            $idUser = $fila[0];
            $autenticado = true;
            $nombreUser = $fila[3];
            $apellidoUser = $fila[4];
            # Verifica el tipo de usuario [1] = profesor, [2] = alumno
            # Mejora para el proyecto final: se podría especificar mejor el tipo de usuario de esta forma tendríamos Admins.
            if ($fila[5] === '1') {
                $tipoUser = 'Profesor';
            } else {
                $tipoUser = 'Alumno';
            }
            break;
        }
    }
    # Si las credenciales son válidas, establecemos sesión y redirige a la página principal: [Mainpage.php].
    if ($autenticado) {
        $_SESSION['id_user'] = $idUser;
        $_SESSION['login_user'] = $nombreUser . ' ' . $apellidoUser;
        $_SESSION['auth_rol'] = $tipoUser;
        fclose($users);
        header('Location: mainpage.php');
        exit();
    } else {
        # De lo contrario mostrará un pequeño cartel dando el error de credenciales incorrectas.
        echo '<div class="container-result mensaje-error"><p>Credenciales incorrectas. Por favor, inténtalo de nuevo.</p></div>';
    }

}