<header class="container">
    <ul class="container--ul-logo">
        <li class="li--item"><img id="logoeduca" src="recursos/educamadrid.png"></li>
    </ul>
    <ul class="container--ul">
        <li class="li--item">Mensajes enviados</li>
        <li class="li--item">Mensajes recibidos</li>
    </ul>
    <ul class="container--profile">
        <li class="li--item">
            <?php
            include('php/login.php');
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