<?php include('mensajes.php'); ?>
<main>
    <div>
        <table border>
            <thead>
                <tr>
                    <th>Remitente</th>
                    <th>Contenido</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($msgRecibidos as $mensaje): ?>
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
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>