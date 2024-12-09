<?php
session_start();

$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Consulta para obtener los ingresos mensuales
$sql = "SELECT DATE_FORMAT(mes, '%Y-%m') as mes, SUM(total_pago) as total FROM pago WHERE YEAR(mes) = YEAR(CURDATE()) and estado=1 GROUP BY DATE_FORMAT(mes, '%Y-%m') ORDER BY mes";
$result = $conn->query($sql);

$data = [];

// Procesar los resultados
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            "mes" => $row['mes'],
            "total" => floatval($row['total'])
        ];
    }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($data);

// Cerrar la conexión
$conn->close();
