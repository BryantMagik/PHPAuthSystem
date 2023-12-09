<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bryan Edward">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="form-container sign-in">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <h1>Iniciar Sesión</h1>
                <label for="nombre">Nombre:</label>
                <input type="text" name="user" placeholder="Introduzca el usuario" required>
                <label for="nombre">Contraseña:</label>
                <input type="password" name="passwd" placeholder="Introduzca el password" required>
                <button type="hidden" name="accion" value="login">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de Nuevo!</h1>
                    <p>Ingresa tus detalles personales para usar todas las funciones del sitio</p>
                </div>
            </div>
        </div>
        <?php require('php/login.php'); ?>
    </div>
</body>
<script>
    setTimeout(function () {
        let mensajeError = document.querySelector('.mensaje-error');
        if (mensajeError) {
            mensajeError.style.display = 'none';
        }
    }, 4000);

</script>
</html>