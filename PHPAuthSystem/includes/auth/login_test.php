<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require(__DIR__ . '/../dbconf.php');
    require(__DIR__ . '/../funciones.php');
    $conex = dbConnection::getInstancia();
    $email = analizar('email');
    $password = analizar('passwd');

    $stmt = $conex->obtenerConexion()->prepare("SELECT id, username, email, password FROM user WHERE (username = ? OR email = ?)");
    // LOS PARAMETROS "?" Serán verifiacdos con la doble ss
    $stmt->bind_param("ss", $email, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (md5($password) === $row['password']) {
            echo "yey!!";
            session_start();
            $_SESSION['id_user'] = $row['id'];
            $_SESSION['login_user'] = $row['username'];
            header('Location: mainpage.php');
            exit();
        } else {
            echo "Datos incorrectos.";
        }
    } else {
        echo "Datos incorrectos";
    }
}