<?php
session_start();

$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);

$usuario_session = $_SESSION['id_usuario'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO medidores (id_situacion, serie_medidor) VALUES ";

foreach($_POST['num_serie'] as $serie){
    if($serie == "") continue;
    $sql .= "({$_POST['id']}, '{$serie}'),";
}


// echo $sql;

$sql = rtrim($sql, ",");


$result = $conn->query($sql);

if ($result) {
    echo json_encode(['codigo' => 0, 'mensaje' => 'Registro creado correctamente']);
} else {
    echo json_encode(['codigo' => -1, 'mensaje' => 'Error al crear el registro', 'error' => $conn->error]);

}