<?php
# Llamado de la lógica del programa.
include_once('php/login.php');
include('mensajes.php');
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="css/header.css">
<header class="container">
    <ul class="container--ul-logo">
        <li class="li--item"><a href="mainpage.php"><img id="logoeduca" src="recursos/educamadrid.png"></a></li>
    </ul>
    <ul class="container--ul">
        <li class="li--item mensajes"><a href="mensajes_enviados.php">Mensajes enviados</a></li>
        <li class="li--item mensajes"><a href="mensajes_recibidos.php">Mensajes recibidos</a></li>
    </ul>
    <!-- Sector: Perfil de usuario-->
    <ul class="container--profile">
        <li class="li--item"><i class="fa-regular fa-comment"><span class="mensajes">
                    <?php
                    if (isset($_SESSION['login_user'])) {
                        echo '<a href="mensajes_recibidos.php" class="nubeMensajes">' . $totalRecibidos . '</a>';
                    } ?>
                </span></i></li>
        <li class="li--item">
            <?php
            # Se recuperan los datos del usuario que ha iniciado sesión para ser mostrados por pantalla
            if (isset($_SESSION['login_user'])) {
                echo '<span>' . $_SESSION['login_user'] . '</span>';
                echo '<ul><li class="li--item user">' . $_SESSION['auth_rol'] . '</li></ul>';
                echo '<ul class="submenu">';
                echo '<li class="submenu--li"><a href="logout.php">Cerrar Sesión</a></li>';
                echo '</ul>';
            } else {
                echo "Usuario no autenticado";
            }
            ?>
        </li>
    </ul>
</header>
<!--Script para el correcto funcionamiento de la nube de mensajes-->
<script src="https://kit.fontawesome.com/f21ed1d185.js" crossorigin="anonymous"></script>