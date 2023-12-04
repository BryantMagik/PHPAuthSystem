<?php
session_start();
include('php/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <header class="container">
        <ul class="container--ul-logo">
            <li class="li--item"><img id="logoeduca" src="recursos/educamadrid.png"></li>
        </ul>
        <ul class="container--ul">
            <li class="li--item">Mensajes enviados</li>
            <li class="li--item">Mensajes recibidos</li>
            <li class="li--item">Cerrar sesión</li>
        </ul>
        <ul class="container--profile">
            <li class="li--item">
                <?php echo $_SESSION['login_user'] ?>
            </li>
        </ul>
    </header>
</body>

</html>