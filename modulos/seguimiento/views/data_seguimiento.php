<?php
session_start();

$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

// print_r($_SESSION);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM seguimiento where estado=1 order by ssr asc";
$result = $conn->query($sql);

$filas = [];


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $filas[] = [
            'id' => $row['id'],
            'fecha' => $row['fecha'],
            'ssr' => $row['ssr'],
            'nombre_contacto' => $row['nombre_contacto'],
            'cargo' => $row['cargo'],
            'contacto' => $row['contacto'],
            'problema' => $row['problema'],
            'solucion' => $row['solucion'],
            'estado_seg' => $row['estado_seg']
           
        ];
    }
}




echo json_encode(['data' => $filas]);
