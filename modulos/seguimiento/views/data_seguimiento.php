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

$sql = "SELECT s.id,
            s.fecha,
            a.ssr,
            s.ssr as id_ssr,
            s.nombre_contacto,
            s.cargo,
            s.contacto,
            s.problema,
            s.solucion,
            estado_seg FROM seguimiento s inner join SSR a on a.id=s.ssr where s.estado=1 order by s.ssr asc";
$result = $conn->query($sql);

$filas = [];


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $filas[] = [
            'id' => $row['id'],
            'fecha' => $row['fecha'],
            'ssr' => $row['ssr'],
            'id_ssr' => $row['id_ssr'],
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
