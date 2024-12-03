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

// Consulta para contar los registros por estado
$sql = "SELECT estado_seg, COUNT(*) as total FROM seguimiento GROUP BY estado_seg";
$result = $conn->query($sql);

// Inicializar datos por defecto
$data = [
    "pendiente" => 0,
    "noSolucionado" => 0,
    "solucionado" => 0
];

// Procesar los resultados
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $estado_seg = strtolower($row['estado_seg']); // Convertir a minúsculas para evitar problemas de mapeo
        $total = intval($row['total']);
        if ($estado_seg === "pendiente") {
            $data["pendiente"] = $total;
        } elseif ($estado_seg === "no solucionado") {
            $data["noSolucionado"] = $total;
        } elseif ($estado_seg === "solucionado") {
            $data["solucionado"] = $total;
        }
    }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($data);

// Cerrar la conexión
$conn->close();
