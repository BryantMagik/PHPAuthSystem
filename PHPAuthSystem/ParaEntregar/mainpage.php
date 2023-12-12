<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bryan Edward">
    <title>Educamadrid</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <?php
    include('header.php');
    if(isset($_SESSION['id_user'])) {
    } else {
        echo 'No hay sesión';
    }
    ?>
</body>
