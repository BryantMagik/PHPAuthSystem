<?php
$msg = fopen('php/csv/mensajes_aula_virtual.csv', 'r');
$totalRecibidos = 0;
$msgRecibidos = [];
while (($fila = fgetcsv($msg)) !== false) {
    if ($_SESSION['id_user'] === $fila[1]) {
        $totalRecibidos++;
        $idOrigen = $fila[0];
        $msgRecibidos[] = [
            'remitente_id' => $fila[0],
            'contenido' => $fila[3],
            'hora' => $fila[4],
        ];
    }
}
fclose($msg);

$users = fopen('php/csv/users_aula_virtual.csv', 'r');
$nombreDestino = '';
while (($fila = fgetcsv($users)) !== false) {
    if ($idOrigen === $fila[0]) {
        $nombreDestino = $fila[3];
    }
}

fclose($users);
?>