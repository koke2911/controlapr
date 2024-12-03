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

$sql = "SELECT * FROM SSR order by ssr asc";
$result = $conn->query($sql);

$filas = [];


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $filas[] = [
            'id' => $row['id'],
            'ssr' => $row['ssr'],
            'rut' => $row['rut'],
            'region' => $row['region'],
            'comuna' => $row['comuna'],
            'email' => $row['email'],
            'direccion' => $row['direccion'],
            'presidente' => $row['presidente'],
            'tesorero' => $row['tesorero'],
            'secretario' => $row['secretario'],
            'nombre' => $row['nombre'],
            'contacto' => $row['contacto'],
            'nombre2' => $row['nombre2'],
            'contacto2' => $row['contacto2'],
            'arranques' => $row['arranques'],
            'foto_portada' => $row['foto_portada'],
            'medidores' => $row['medidores'],
            'estado' => $row['estado'],
            'fecha_ingreso' => $row['fecha_ingreso'],
            'usu_ingreso' => $row['usu_ingreso'],
        ];
    }
}


echo json_encode(['data' => $filas]);
