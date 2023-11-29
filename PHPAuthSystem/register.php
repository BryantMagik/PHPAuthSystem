<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="user">
        <input type="password" name="password">
        <input type="password" name="passwordVerificada">
        <input type="email" name="email">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="submit" name="enviar">
    </form>

    <?php

    require_once('php/funciones.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $getUser = analizar('user');
        $getPassword = analizar('password');
        $getPassword_Verificada = analizar('passwordVerificada');
        $getEmail = analizar('email');
        $getNombre = analizar('nombre');
        $getApellido = analizar('apellido');
        /*VERIFICACIÓN PASSWORD*/
        if (($getPassword === $getPassword_Verificada)) {
            registrarUsuario($getUser, $getPassword, $getEmail, $getNombre, $getApellido);
        } else {
            echo '<p>Contraseña no coincide</p>';
        }
    }

    ?>

</body>

</html>