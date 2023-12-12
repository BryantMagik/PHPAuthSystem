<?php
include('header.php');
require('mensajes.php'); ?>
<link rel="stylesheet" href="css/mensajes.css">
<main>
    <div>
        <h1>Mensajes enviados</h1>
        <table border>
            <thead>
                <tr>
                    <th>Enviado a </th>
                    <th>Contenido</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_SESSION['id_user'])) {
                    foreach ($msgEnviados as $mensaje): ?>
                        <tr>
                            <td>
                                <?php echo $nombreDestino; ?>
                            </td>
                            <td>
                                <?php echo $mensaje['contenido']; ?>
                            </td>
                            <td>
                                <?php echo $mensaje['hora']; ?>
                            </td>
                        </tr>
                    <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
</main>