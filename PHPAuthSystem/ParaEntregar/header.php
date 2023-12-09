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
            <?php
            include('php/login.php');
            if (isset($_SESSION['login_user'])) {
                echo $_SESSION['login_user'];
            } else {
                echo "Usuario no autenticado";
            }
            ?>
        </li>
    </ul>
</header>