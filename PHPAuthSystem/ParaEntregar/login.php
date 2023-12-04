<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bryan Edward">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="user" placeholder="Introduzca el usuario" required>
        <label for="nombre">Contraseña:</label>
        <input type="password" name="passwd" placeholder="Introduzca el password" required>
        <input type="submit" name="value">
    </form>    
</body>
</html>

<?php
    function analizar($datos) {
        return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = analizar('user');
        $passwd = analizar('passwd');

        $users = fopen('users_aula_virtual.csv', 'r');

        while (($fila = fgetcsv($users)) !== false) {
            $idUser = $fila[1];
            $passUser = $fila[2];
            if (($user === $idUser) && password_verify($passwd,$passUser)) {
                $autenticado = true;
                echo "OLEEE";
                session_start();
                $_SESSION['login_user'] = $nombreArchivo;
                break;
            }
        }

    }
?>