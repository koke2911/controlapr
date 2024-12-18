<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$usuario_session = $_SESSION['id_usuario'];

$id_apr = $_POST['apr'];
$giro = $_POST['giro'];
$factura = $_POST['factura'];
$edita = $_POST['edita'];
$id = $_POST['id'];
$medidores = $_POST['medidores'];
$fecha_adquisicion=$_POST['fecha_adquisicion'];


$sql = "SELECT id FROM situacion WHERE numero_factura = $factura AND id_apr = $id_apr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(['codigo' => 2, 'mensaje' => 'El numero de factura ya existe para este apr']);
    exit;
}

if ($edita == 0) {
    // Inserción de un nuevo registro
    $sql = "INSERT INTO situacion (
                id_apr, giro, numero_factura, estado, fecha_ingreso, usu_ingreso,fecha_adquisicion,medidores
            ) VALUES (
                $id_apr, '$giro', $factura, 1, NOW(), '$usuario_session','$fecha_adquisicion','$medidores'
            )";

    $result = $conn->query($sql);

    // echo $sql;

    if ($result) {
        echo json_encode(['codigo' => 0, 'mensaje' => 'Registro creado correctamente']);
    } else {
        echo json_encode(['codigo' => 2, 'mensaje' => 'Error al crear el registro', 'error' => $conn->error]);
    }
} else if ($edita == 1) {
    // Actualización de un registro existente
    $sql = "UPDATE situacion SET 
                id_apr = $id_apr,
                giro = '$giro',
                numero_factura = $factura,
                estado = 1,
                fecha_ingreso = NOW(),
                usu_ingreso = '$usuario_session',
                fecha_adquisicion='$fecha_adquisicion',
                medidores='$medidores'
            WHERE id = $id";

    // echo $sql;

    $result = $conn->query($sql);

    if ($result) {
        echo json_encode(['codigo' => 0, 'mensaje' => 'Registro actualizado correctamente']);
    } else {
        echo json_encode(['codigo' => 2, 'mensaje' => 'Error al actualizar el registro', 'error' => $conn->error]);
    }
}

