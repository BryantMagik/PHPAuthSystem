<header>
    <div class="container mainpage">
        <div class="nav-container menu-list">
            <ul>
                <li>
                    <?php
                    require_once(__DIR__ . '/../includes/auth/login.php');
                    if (isset($_SESSION['id_user'])) {
                        echo '<h3>' . $_SESSION['login_user'] . '</h3>';
                    } else {
                        echo "Usuario no autenticado";
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</header>