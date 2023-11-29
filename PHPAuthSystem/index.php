<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bryan Edward">
    <title>Bryan</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container-login">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <h1>Iniciar Sesión</h1>
            <label for="user">Usuario:</label>
            <input type="text" name="user">
            <label for="password">Contraseña:
            </label>
            <input type="password" name="password">
            <input type="submit" value="Iniciar Sesión">
            <button type="submit" name="registro" formaction="register.php">Registrarse</button>
        </form>
    </div>
    <?php require_once('php/login.php'); ?>
</body>

</html>