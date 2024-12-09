<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$usuario_session = $_SESSION['id_usuario'];


$fecha_pago = $_POST['fecha_pago'];
$mes = $_POST['mes'];
$nombre_ssr = $_POST['nombre_ssr'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$region = $_POST['region'];
$contacto = $_POST['contacto'];
$cargo = $_POST['cargo'];
$numero = $_POST['numero'];
$contacto2 = $_POST['contacto2'];
$total_pago = $_POST['total_pago'];
$numero_factura = $_POST['numero_factura'];

$edita = $_POST['edita'];
$id = $_POST['id'];


if ($edita == 0) {
    // Inserción de un nuevo registro
    $sql = "INSERT INTO pago (
                fecha_pago, mes, nombre_ssr, rut, email, region, contacto, cargo, numero, contacto2, total_pago, numero_factura, estado, fecha_ingreso, usu_ingreso
            ) VALUES (
                '$fecha_pago', '$mes-01', $nombre_ssr, '$rut', '$email', '$region', '$contacto', '$cargo', $numero, '$contacto2', $total_pago, $numero_factura, 1, NOW(), '$usuario_session'
            )";

    $result = $conn->query($sql);

    // echo $sql;

    if ($result) {
        echo json_encode(['codigo' => 0, 'mensaje' => 'Registro creado correctamente']);
    } else {
        echo json_encode(['codigo' => -1, 'mensaje' => 'Error al crear el registro', 'error' => $conn->error]);
    }
} else if ($edita == 1) {
    // Actualización de un registro existente
    $sql = "UPDATE pago SET 
                fecha_pago = '$fecha_pago',
                mes = '$mes-01',
                nombre_ssr = $nombre_ssr,
                rut = '$rut',
                email = '$email',
                region = '$region',
                contacto = '$contacto',
                cargo = '$cargo',
                numero = $numero,
                contacto2 = '$contacto2',
                total_pago = $total_pago,
                numero_factura = $numero_factura,
                estado = 1,
                fecha_ingreso = NOW(),
                usu_ingreso = '$usuario_session'
            WHERE id = $id";

            // echo $sql;

    $result = $conn->query($sql);

    if ($result) {
        echo json_encode(['codigo' => 1, 'mensaje' => 'Registro actualizado correctamente']);
    } else {
        echo json_encode(['codigo' => -1, 'mensaje' => 'Error al actualizar el registro', 'error' => $conn->error]);
    }
}
