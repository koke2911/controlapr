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

$sql = "SELECT d.id,
            d.fecha_pago,
           date_format(d.mes, '%Y-%m') as mes,            
            UPPER(date_format(d.mes, '%M - %Y')) as mes_glosa,
            a.ssr as nombre_ssr,
            d.nombre_ssr id_ssr,
            d.rut,
            d.email,
            d.region,
            d.contacto,
            d.cargo,
            d.numero,
            d.contacto2,
            format(d.total_pago, 0, 'de_DE') as separado,
            d.total_pago,
            d.numero_factura,
            d.estado,
            d.fecha_ingreso,
            d.usu_ingreso
        FROM pago d
        inner join SSR a on a.id=d.nombre_ssr 
        WHERE d.estado = 1
        ORDER BY d.id ASC";

$result = $conn->query($sql);

$filas = [];


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $filas[] = [
            'id' => $row['id'],
            'fecha_pago' => $row['fecha_pago'],
            'mes' => $row['mes'],
            'mes_glosa' => $row['mes_glosa'],
            'nombre_ssr' => $row['nombre_ssr'],
            'id_ssr' => $row['id_ssr'],
            'rut' => $row['rut'],
            'email' => $row['email'],
            'region' => $row['region'],
            'contacto' => $row['contacto'],
            'cargo' => $row['cargo'],
            'numero' => $row['numero'],
            'contacto2' => $row['contacto2'],
            'total_pago' => $row['total_pago'],
            'numero_factura' => $row['numero_factura'],
            'estado' => $row['estado'],
            'fecha_ingreso' => $row['fecha_ingreso'],
            'usu_ingreso' => $row['usu_ingreso'],
            'separado' => $row['separado']

        ];
    }
}




echo json_encode(['data' => $filas]);
