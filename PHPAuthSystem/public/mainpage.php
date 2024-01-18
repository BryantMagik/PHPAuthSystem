<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/header.css"> -->
</head>

<body>
    <!-- Header -->
    <?php include(__DIR__ . '/../templates/header.php');
    if (isset($_SESSION['id_user'])) {
    } else {
        echo 'No hay sesión';
    }
    ?>
    <ul>
        <li><a href="">Ver notas</a></li>
        <li>Ver </li>
    </ul>
</body>


</html>