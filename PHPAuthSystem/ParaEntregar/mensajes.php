<?php
# Lógica para los mensajes, los mensajes son guardados dependiendo del origen y destino 
# Y son almacenados en los arrays para luego imprimirlos
if (isset($_SESSION['id_user'])) {
    $msg = fopen('php/csv/mensajes_aula_virtual.csv', 'r');
    $totalRecibidos = 0;
    $msgRecibidos = [];
    $msgEnviados = [];
    while (($fila = fgetcsv($msg)) !== false) {
        if ($_SESSION['id_user'] === $fila[1]) {
            $totalRecibidos++;
            $idOrigen = $fila[0];
            $msgRecibidos[] = [
                'contenido' => $fila[3],
                'hora' => $fila[4],
            ];
        }
        if ($_SESSION['id_user'] === $fila[0]) {
            $msgEnviados[] = [
                'contenido' => $fila[3],
                'hora' => $fila[4],
            ];
        }
    }
    fclose($msg);
    # Verificación de la id del los usuarios relacionados con los mensajes.
    $users = fopen('php/csv/users_aula_virtual.csv', 'r');
    $nombreDestino = '';
    while (($fila = fgetcsv($users)) !== false) {
        if ($idOrigen === $fila[0]) {
            # Almacena el nombre del destinatario y remitente.
            $nombreDestino = $fila[3];
        }
    }

    fclose($users);

} else {
    echo 'No hay sesión';
}

?>