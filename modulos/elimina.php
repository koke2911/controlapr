<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$tabla=$_POST['tabla'];
$id=$_POST['id'];

$sql="update $tabla set estado=2 WHERE id=$id";
$result = $conn->query($sql);

// echo $sql;

if ($result) {
    echo json_encode(['codigo' => 0, 'mensaje' => 'Registro Eliminado correctamente']);
} else {
    echo json_encode(['codigo' => 2, 'mensaje' => 'Error al Eliminar el registro', 'error' => $conn->error]);
}
