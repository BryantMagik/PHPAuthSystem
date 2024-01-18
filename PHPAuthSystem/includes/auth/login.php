<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require(__DIR__ . '/../dbconf.php');
    require(__DIR__ . '/../funciones.php');
    $conex = dbConnection::getInstancia();

    $email = analizar('email');
    $password = analizar('passwd');

    $sql = "SELECT id, username, email, password FROM user WHERE (username='$email' or email = '$email')and (password=md5('$password'))";

    if ($result = $conex->obtenerConexion()->query($sql)) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id_user'] = $row['id'];
            $_SESSION['login_user'] = $row['username'];
            header('Location: mainpage.php');
            exit();
        } else {
            echo 'Usuario o Contraseñas incorrectos';
        }
    } else {
        die("Error en la consulta a la base de datos");
    }
}

