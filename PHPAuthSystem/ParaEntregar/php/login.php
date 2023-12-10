<?php
session_start();
function analizar($datos)
{
    return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = analizar('user');
    $passwd = analizar('passwd');

    $users = fopen('php/csv/users_aula_virtual.csv', 'r');
    $autenticado = false;

    while (($fila = fgetcsv($users)) !== false) {
        $passUser = $fila[2];
        if (($user === $fila[1]) && md5($passwd) === $passUser) {
            $idUser = $fila[0];
            $autenticado = true;
            $nombreUser = $fila[3];
            $apellidoUser = $fila[4];
            if ($fila[5] === '1') {
                $tipoUser = 'Profesor';
            } else {
                $tipoUser = 'Alumno';
            }
            break;
        }
    }
    if ($autenticado) {
        $_SESSION['id_user'] = $idUser;
        $_SESSION['login_user'] = $nombreUser . ' ' . $apellidoUser;
        $_SESSION['auth_rol'] = $tipoUser;
        fclose($users);
        header('Location: mainpage.php');
        exit();
    } else {
        echo '<div class="container-result mensaje-error"><p>Credenciales incorrectas. Por favor, inténtalo de nuevo.</p></div>';
    }

}
?>