<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$usuario_session = $_SESSION['id_usuario'];


$estado = $_POST['estado'];
$fecha = $_POST['fecha'];
$apr = $_POST['apr'];
$nombre_contacto = $_POST['nombre_contacto'];
$cargo = $_POST['cargo'];
$contacto = $_POST['contacto'];
$problema = $_POST['problema'];
$solucion = $_POST['solucion'];
$edita = $_POST['edita'];
$id = $_POST['id'];


if ($edita == 0) {
    // Inserción de un nuevo registro
    $sql = "INSERT INTO seguimiento (
                fecha, ssr, nombre_contacto, cargo, contacto, problema, solucion, 
                estado_seg, estado, fecha_ingreso, usu_ingreso
            ) VALUES (
                '$fecha', $apr, '$nombre_contacto', '$cargo', '$contacto', 
                '$problema', '$solucion', '$estado', 1, NOW(), '$usuario_session'
            )";

    $result = $conn->query($sql);

    if ($result) {
        echo json_encode(['codigo' => 0, 'mensaje' => 'Registro creado correctamente']);
    } else {
        echo json_encode(['codigo' => -1, 'mensaje' => 'Error al crear el registro', 'error' => $conn->error]);
    }
} else if ($edita == 1) {
    // Actualización de un registro existente
    $sql = "UPDATE seguimiento SET 
                fecha = '$fecha',
                ssr = $apr,
                nombre_contacto = '$nombre_contacto',
                cargo = '$cargo',
                contacto = '$contacto',
                problema = '$problema',
                solucion = '$solucion',
                estado_seg = '$estado',
                estado = 1,
                fecha_ingreso = NOW(),
                usu_ingreso = '$usuario_session'
            WHERE id = $id";

    $result = $conn->query($sql);

    if ($result) {
        echo json_encode(['codigo' => 1, 'mensaje' => 'Registro actualizado correctamente']);
    } else {
        echo json_encode(['codigo' => -1, 'mensaje' => 'Error al actualizar el registro', 'error' => $conn->error]);
    }
}



