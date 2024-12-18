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

$conn->query("SET lc_time_names = 'es_ES'");

$sql = "SELECT  c.id,
                c.id_apr,
                c.giro,
                c.numero_factura,
                a.ssr as nombre_ssr,
                c.medidores,
                a.arranques,
                a.rut,
                c.fecha_adquisicion
        FROM situacion c
        inner join SSR a on a.id=c.id_apr 
        WHERE c.estado = 1
        ORDER BY c.id ASC";

// echo $sql;

$result = $conn->query($sql);

$filas = [];


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $filas[] = [
            'id' => $row['id'],
            'id_apr' => $row['id_apr'],
            'giro' => $row['giro'],
            'nombre_ssr' => $row['nombre_ssr'],
            'rut'       =>$row['rut'],
            'arranques' => $row['arranques'],
            'medidores' => $row['medidores'],
            'numero_factura' => $row['numero_factura'],
            'fecha' => $row['fecha_adquisicion']

        ];
    }
}




echo json_encode(['data' => $filas]);
