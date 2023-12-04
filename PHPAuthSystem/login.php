<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Bryan Edward">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Página de Inicio de Sesión </title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <h1>Crear Cuenta</h1>
                <span>o usa tu correo electrónico para registrarte</span>
                <input type="text" name="nombreReg" placeholder="Nombre" required>
                <input type="text" name="apellidoReg" placeholder="Apellido" required>
                <input type="email" name="emailReg" placeholder="Correo Electrónico" max="30" required>
                <input type="password" name="passwdReg" placeholder="Contraseña" max="16" min="8" required>
                <button type="hidden" name="accion" value="registro">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <h1>Iniciar Sesión</h1>
                <span>o usa tu correo electrónico y contraseña</span>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <input type="password" name="passwd" placeholder="Contraseña" required>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="hidden" name="accion" value="login">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de Nuevo!</h1>
                    <p>Ingresa tus detalles personales para usar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola, Amigo!</h1>
                    <p>Regístrate con tus detalles personales para usar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];
            if ($accion === 'registro') {
                require('php/register.php');
            } elseif ($accion === 'login') {
                require('php/login.php');
            }
        }
    }
    ?>
</body>

</html>