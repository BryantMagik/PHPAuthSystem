<?php
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
        $idUser = $fila[1];
        $passUser = $fila[2];
        $tipoUser = $fila[5];
        if (($user === $fila[1]) && md5($passwd, $passUser)) {
            $autenticado = true;
            $nombreUser = $fila[3];
            $apellidoUser = $fila[4];
            break;
        }
    }
    if ($autenticado) {
        session_start();
        $_SESSION['login_user'] = $nombreUser.' '.$apellidoUser;
        header('Location: header.php');
        exit();
    } else {
        echo "Datos incorrectos";
    }

}
?>