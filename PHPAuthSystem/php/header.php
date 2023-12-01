<header>
        <div class="container mainpage">
            <div class="nav-container menu-list">
                <ul>
                    <li>HOLA</li>
                    <li><?php
                        require_once('funciones.php');
                        $getEmail = analiza('email');
                        while(($fila = fgetcsv($datos) !== false)){
                            $emailArchivo = $fila[0];
                            $nombreArchivo = $fila[2];
                            $apellidoArchivo = $fila[3];
                            if($getEmail === $emailArchivo){
                                $_SESSION['login_user'] = $nombreArchivo;
                                break;
                            }
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
</header>