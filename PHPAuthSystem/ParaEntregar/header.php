<?php
include('php/login.php');
include('mensajes.php');
?>
<header class="container">
    <ul class="container--ul-logo">
        <li class="li--item"><img id="logoeduca" src="recursos/educamadrid.png"></li>
    </ul>
    <ul class="container--ul">
        <li class="li--item"><a href="">Mensajes enviados</a></li>
        <li class="li--item"><a href="">Mensajes recibidos</a></li>
    </ul>
    <ul class="container--profile">
        <li class="li--item"><i class="fa-regular fa-comment"><span class="mensajes">
                    <?php echo '<a href="" class="">' . $totalRecibidos . '</a>' ?>
                </span></i></li>
        <li class="li--item">
            <?php
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