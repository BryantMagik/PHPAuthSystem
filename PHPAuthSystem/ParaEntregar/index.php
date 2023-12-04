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
    <?php require('php/login.php');?>
</body>
</html>